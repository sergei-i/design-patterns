<?php

namespace AbstractFactory;

class MysqlDatabaseConnect implements DatabaseConnect
{
    private \mysqli $mysqli;

    public function __construct(string $host, string $user, string $password, string $db)
    {
        $this->mysqli = new \mysqli($host, $user, $password, $db);
        if ($this->mysqli->connect_error) {
            exit('Ошибка подключения...');
        }
    }

    public function connection(): \mysqli
    {
        return $this->mysqli;
    }
}