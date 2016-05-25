<?php namespace Twk;

class DatabaseConnection {

    public function __construct($username, $password)
    {

    }

    public function run($sql, $params)
    {
        var_dump("SQL: $sql\n, Parmas: " . var_export($params, true));
    }
}