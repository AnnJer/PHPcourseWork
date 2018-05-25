<?php
namespace database\connection;

use \PDO;

class Database
{

    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }


    public function query(string $query, array $params = null, string $fetchClass = null): array {

        $sth = $this->connection->prepare($query);
        $sth->execute($params);

        if($fetchClass) {
            $sth->setFetchMode(PDO::FETCH_CLASS, $fetchClass);
        } else {
            $sth->setFetchMode(PDO::FETCH_ASSOC);
        }

        $result = [
            'data' => $sth->fetchAll(),
            'error' => $sth->errorInfo()
        ];

        return $result;
    }


    public function quote (string $parameter): string {
        return $this->connection->quote($parameter);
    }


    public function getConnection(): PDO
    {
        return $this->connection;
    }

}