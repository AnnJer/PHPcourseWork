<?php

    define('ROOT', dirname(__FILE__));
    define('HOST', $_SERVER['HTTP_HOST']);

    define('ROOT_DIR', '/kursovaya');


    define('GET', 'GET');
    define('POST', 'POST');

    require_once ('config/appMeta.php');

    require_once ('core/Loader.php');

    $loader = new \core\Loader(['php']);

    $loader->loadDir('model');
    $loader->loadDir('controllers');
    $loader->loadDir('core');

    $loader->loadDir('libs');


    session_start();

    use function \database\sql\sql;
    use function \database\sql\less;
    use function \database\sql\greater;
    use function \database\sql\equals;
    use function \database\sql\notEquals;

    use \database\sql\SQLResult;
    use \database\sql\SqlSyntaxError;

    use \database\connection\Database;
    use \database\builder\SQL as builder;


    try {
        $connection = \core\DB::getConnection();
        $connection->query("SET NAMES utf8");
        \database\builder\SQL::setConnection($connection);
    } catch (Exception $exp) {
        echo '<h1>Something go wrong</h1>';
        exit;
    }


$router = new \core\Router();
    $router->run();