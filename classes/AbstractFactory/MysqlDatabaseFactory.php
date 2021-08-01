<?php

namespace AbstractFactory;

class MysqlDatabaseFactory implements DatabaseFactory
{
    private string $host;

    private string $user;

    private string $password;

    private string $db;

    public function __construct(string $host, string $user, string $password, string $db)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->db = $db;
    }

    public function connect(): DatabaseConnect
    {
        return new MysqlDatabaseConnect($this->host, $this->user, $this->password, $this->db);
    }

    public function query(): DatabaseQuery
    {
        $dbConnection = $this->connect();
        return new MysqlDatabaseQuery($dbConnection);
    }
}