<?php
namespace database\builder;


use \PDO;
use \database\connection\Database;
use \database\sql\SQLResult;
use \database\sql\SqlSyntaxError;

require_once 'SqlSyntaxError.php';
require_once 'SQLResult.php';
require_once 'Database/Database.php';

class SQL
{
    /**
     * common Database connection
     * @var Database
     */
    private static $dbh;

    /**
     * specified Database connection. If not substituted in constructor, equals to @see dbh
     * @var Database
     */
    private $connection;



    /**
     * dictionary with chose queries commands
     * key: string -> one of [select, delete, insert, where, orderBy, limit]
     * value: any -> parameters linked with following command
     * @var array
     */
    private $query;

    /**
     * dictionary of params to substitution in a query string
     * key: string -> named param substituted by PDO
     * @var array
     */
    private $params;



    function __construct(PDO $connection = null)
    {
        if ($connection) {
            $this->connection = new Database($connection);
        } else {
            $this->connection = new Database(self::$dbh);
        }

        $this->params = [];
        $this->query = [];
    }



    public static function setConnection(PDO $dbh): void
    {
        self::$dbh = $dbh;
    }

    public function getConnection(): Database
    {
        return $this->connection;
    }

    public function getParams(): array
    {
        return $this->params;
    }





    /**
     * get an array of string that represent a name of a current tables
     * @param array $table
     * @return SQL
     */
    public function table(array $table): SQL
    {
        $this->query['table'] = $table;
        return $this;
    }

    /**
     * $cols is an array of strings, that represents a columns names
     * example: sql()->table(['tableName'])->select(['col_1', 'col_2']) means <code>SELECT `col_1`, `col_2` FROM `tableName`</code>;
     *          sql()->table(['tableName'])->select([]) means <code>SELECT * FROM `tableName`</code>;
     *
     * @param array $cols
     * @return SQL
     */
    public function select(array $cols = []): SQL
    {
        $this->query['select'] = $cols;
        return $this;
    }

    public function delete(): SQL
    {
        $this->query['delete'] = null;
        return $this;
    }

    /**
     * @param array $cols
     *      array of string that represents a name of needed columns
     * @param array $values
     *      array of arrays of values to insert. each array is new row in database
     * @return SQL
     */
    public function insert(array $cols, array $values): SQL
    {
        $this->query['insert'] = ['cols' => $cols, 'values' => $values];
        return $this;
    }


    public function update(array $cols)
    {
        $this->query['update'] = $cols;

        return $this;
    }

    /**
     * get an array of @see Conditions that represent a logical condition
     * @param array $conditions
     * @return SQL
     */
    public function where(array $conditions): SQL
    {
        $this->query['where'] = $conditions;
        return $this;
    }

    public function orderBy(array $cols, bool $desc = false): SQL
    {
        $this->query['orderBy'] = ['cols' => $cols, 'desc' => $desc];
        return $this;
    }

    public function limit(int $num, int $offset = 0): SQL
    {
        $this->query['limit'] = [$num, $offset];
        return $this;
    }

    public function union(SQL $sql): SQL {
        $this->query['union'] = $sql;
        return $this;
    }

    /**
     * example : sql()->table(['staff'])->select(['staff.name', 'positions.positionName'])->join(['positions' => 'staff.positionId = positions.id'])
     *      means: SELECT staff.name, positions.positionName FROM staff INNER JOIN positions ON staff.positionId = positions.id
     *
     * @param array $tables
     *      dictionary, where
     *          key: string -> table name
     *          value: string -> ON condition
     *
     * @return SQL
     */
    public function join(array $tables): SQL {
        $this->query['join'] = $tables;
        return $this;
    }



    private function buildQuery(): string
    {

        $qStr = '';

        if ($this->checkCommand('delete')) {
            $qStr = $this->formDeleteQuery();
        } elseif ($this->checkCommand('select')) {
            $qStr = $this->formSelectQuery();
        } elseif ($this->checkCommand('insert')) {
            $qStr = $this->formInsertQuery();
        } elseif ($this->checkCommand('update')) {
            $qStr = $this->formUpdateQuery();
        }


        return $qStr;

    }

    private function formUpdateQuery()
    {
        $qStr = 'UPDATE ' . $this->query['table'][0];
        $this->addSet($qStr, $this->query['update']);

        if ($this->checkCommand('where')) {
            $this->addWhere($qStr, $this->query['where']);
        }
        return $qStr;
    }


    private function addSet(&$qStr, array $params)
    {
        $qStr.=' SET ';
        $counter = count($params);
        foreach ($params as $field=>$value)
        {
            $qStr.= "$field=" . '\''. $value . '\'';
            $counter--;
            if($counter!=0) $qStr.=',';
        }
    }



    private function formInsertQuery(): string
    {

        $qStr = 'INSERT INTO ' . $this->query['table'][0] .'('
            . implode(', ', $this->query['insert']['cols'])
            . ') VALUES ';

        $this->addValues($qStr, $this->query['insert']['values']);

        return $qStr;
    }

    private function formSelectQuery(): string
    {
        $qStr = 'SELECT ';

        $qStr .=  ($this->query['select'])?
            implode(', ', $this->query['select']) : '*';

        if($this->checkCommand('table')){
            $this->addFrom($qStr, $this->query['table']);
        }

        if ($this->checkCommand('where')) {
            $this->addWhere($qStr, $this->query['where']);
        }

        if ($this->checkCommand('join')) {
            $this->addJoin($qStr, $this->query['join']);
        }

        if ($this->checkCommand('union')) {
            $this->addUnion($qStr, $this->query['union']);
        }

        if ($this->checkCommand('orderBy')) {
            $this->addOrderBy($qStr, $this->query['orderBy']);
        }

        if ($this->checkCommand('limit')) {
            $params = $this->query['limit'];
            $this->addLimit($qStr, $params[0], $params[1]);
        }

        return $qStr;
    }

    private function formDeleteQuery(): string
    {
        $qStr = 'DELETE FROM ' . implode(', ', $this->query['table']);


        if ($this->checkCommand('where')) {
            $this->addWhere($qStr, $this->query['where']);
        }

        return $qStr;
    }




    private function addFrom(string &$qStr, array $params) {
        $qStr .= ' FROM ' . implode(', ', $params);
    }

    private function addOrderBy(string &$qStr, array $params) {
        $qStr .= ' ORDER BY ' . implode(' ,', $params['cols']);

        $qStr .= ($params['desc']) ? ' DESC' : '';
    }

    private function addLimit(string &$qStr, int $num, int $offset = null)
    {
        $qStr .= ' LIMIT ';
        $qStr .= ($offset !== null) ? "$offset, " : '';
        $qStr .= $num;
    }

    private function addWhere(string &$qStr, array &$params, string $prefix = 'where_')
    {

        $firstCond = array_shift($params);

        $qStr .= ' WHERE ' . $firstCond->getLeft() . ' '
            . $firstCond->getOperation() . $this->getNamedParam($prefix, 0);


        $this->params[$this->getNamedParam($prefix, 0)] = $firstCond->getRight();

        $counter = 1;

        foreach ($params as $condition) {
            $qStr .= ' AND ' . $condition->getLeft() . ' '
                . $condition->getOperation() . $this->getNamedParam($prefix, $counter);

            $this->params[$this->getNamedParam($prefix, $counter)] = $condition->getRight();

            $counter += 1;
        }

    }

    private function addValues(string &$qStr, array $valuesArr, $prefix = 'insert_')
    {

        $counter = 0;

        foreach ($valuesArr as &$values) {
            foreach ($values as &$value) {
                $temp = $this->getNamedParam($prefix, $counter++);
                $this->params[$temp] = $value;
                $value = $temp;
            }
        }

        $firstVal = array_shift($valuesArr);
        $qStr .= '( ';
        $qStr .= implode(', ', $firstVal);
        $qStr .= ' )';

        foreach ($valuesArr as $values) {
            $qStr .= ', ( ';
            $qStr .= implode(', ', $values);
            $qStr .= ' )';
        }
    }

    private function addUnion(string &$qStr, SQL $otherSelect) {
        $qStr .= ' UNION ' . $this->renderOtherSql($otherSelect);
    }

    private function addJoin(string &$qStr, array $tables) {
        foreach ($tables as $tableName => $condition) {
            $qStr .= ' INNER JOIN ' . $tableName . ' ON ' . $condition;
        }
    }



    private function renderOtherSql(SQL $otherSql): string {

        $query = $otherSql->buildQuery();
        $otherParams = $otherSql->params;

        $query = $this->substituteQueryParams($query, $otherParams);

        return $query;
    }

    private function getNamedParam(string $prefix, int $num): string
    {
        return ':' . $prefix . $num;
    }

    private function checkCommand(string $command): bool
    {
        if (array_key_exists($command, $this->query)) {
            return true;
        }

        return false;
    }




    private function substituteQueryParams(string $query, array $params = null): string
    {
        if (!$params) {
            return $query;
        }

        foreach ($params as $key => &$value) {
            $query = str_replace($key,  $this->connection->quote($value) , $query);
        }

        return $query;
    }



    public function exec(string $fetchClass = null): SQLResult
    {
        $query = $this->buildQuery();

        $answer = $this->connection->query($query, $this->params, $fetchClass);

        $query = $this->substituteQueryParams($query, $this->params);

        return new SQLResult($answer['data'], $query, $answer['error']);
    }


    public function query($query, $params = null, $fetchClass = null)
    {
        $answer = $this->connection->query($query, $params, $fetchClass);

        $query = $this->substituteQueryParams($query, $params);

        return new SQLResult($answer['data'], $query, $answer['error']);
    }

}