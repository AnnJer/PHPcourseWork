<?php
namespace database\logical\sql;

trait ConditionTrait
{
    public function __construct( $leftOperand,  $rightOperand)
    {
        parent::__construct($leftOperand, $rightOperand);
    }

}