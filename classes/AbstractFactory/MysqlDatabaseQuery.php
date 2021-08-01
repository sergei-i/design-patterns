<?php

namespace AbstractFactory;

class MysqlDatabaseQuery implements DatabaseQuery
{
    private DatabaseConnect $dbConnection;

    public function __construct(DatabaseConnect $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function execute(string $query): void
    {
        $this->dbConnection->connection()->query($query);
    }
}