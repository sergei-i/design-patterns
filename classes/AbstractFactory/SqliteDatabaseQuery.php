<?php

namespace AbstractFactory;

class SqliteDatabaseQuery implements DatabaseQuery
{
    private DatabaseConnect $dbConnection;

    public function __construct(DatabaseConnect $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function execute(string $query): void
    {
//        $this->dbConnection->connection()->query("CREATE TABLE messages(id, text);");
        $this->dbConnection->connection()->query($query);
//        var_dump($this->dbConnection->connection()->query("SELECT * FROM messages")->fetchArray());
    }
}