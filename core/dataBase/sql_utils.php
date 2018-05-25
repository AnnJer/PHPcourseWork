<?php
namespace database\sql;

use \PDO;
use \database\logical\sql as logical;
use \database\builder\SQL;

require_once 'SQL.php';
require_once 'conditions/Greater.php';
require_once 'conditions/Less.php';
require_once 'conditions/Equals.php';
require_once 'conditions/NotEquals.php';

function sql(PDO $connection = null): SQL {
    return new SQL($connection);
}

function less( $leftOperand,  $rightOperand): logical\Less{
    return new logical\Less($leftOperand, $rightOperand);
}

function greater( $leftOperand,  $rightOperand): logical\Greater{
    return new logical\Greater($leftOperand, $rightOperand);
}

function equals( $leftOperand,  $rightOperand): logical\Equals{
    return new logical\Equals($leftOperand, $rightOperand);
}

function notEquals( $leftOperand,  $rightOperand): logical\NotEquals{
    return new logical\NotEquals($leftOperand, $rightOperand);
}