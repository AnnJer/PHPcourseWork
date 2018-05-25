<?php
namespace database\logical\sql;


require_once 'Condition.php';
require_once 'ConditionTrait.php';

class Greater extends Condition
{
    use ConditionTrait;


    public function getOperation(): string
    {
        return '>';
    }
}