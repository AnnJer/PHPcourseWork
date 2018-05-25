<?php
namespace database\logical\sql;

abstract class Condition
{
    private $left;
    private $right;


    /**
     * Condition constructor.
     * @param $leftOperand
     *      it can represent a column name (this var not wrapped into ``) or other variable allowed by database
     *
     * @param $rightOperand
     *      substituted as string!
     */
    public function __construct($leftOperand, $rightOperand)
    {
        $this->left = $leftOperand;
        $this->right = $rightOperand;
    }


    public function getLeft()
    {
        return $this->left;
    }

    public function getRight()
    {
        return $this->right;
    }




    public abstract function getOperation(): string;
}