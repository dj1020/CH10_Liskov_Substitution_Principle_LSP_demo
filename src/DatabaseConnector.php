<?php namespace Twk;

class DatabaseConnector {

    private $connection;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function bootConnection()
    {
        if (is_null($this->connection)) {
            $this->connection = $this->connect($this->username, $this->password);
        }

        return $this->connection;
    }

    protected function connect($username, $password) {
        return new DatabaseConnection($username, $password);
    }
}