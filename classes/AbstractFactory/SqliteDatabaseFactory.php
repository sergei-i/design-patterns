<?php

namespace AbstractFactory;

class SqliteDatabaseFactory implements DatabaseFactory
{
    private string $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function connect(): DatabaseConnect
    {
        return new SqliteDatabaseConnect($this->fileName);
    }

    public function query(): DatabaseQuery
    {
        $dbConnection = $this->connect();
        return new SqliteDatabaseQuery($dbConnection);
    }
}