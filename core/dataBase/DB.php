<?php

namespace core;


class DB
{
    private static $connection = null;


    public static function getConnection() : \PDO
    {
        if(!self::$connection) {
            $config = require_once ROOT . '/config/dataBaseConfig.php';
            self::$connection = new \PDO("mysql:host={$config['host']};dbname={$config['dbname']}", $config['login'], $config['password']);
        }

        return self::$connection;
    }
}