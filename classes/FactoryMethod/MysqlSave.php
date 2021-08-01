<?php

namespace FactoryMethod;

class MysqlSave implements ISave
{
    private \mysqli $mysqli;

    public function __construct(string $host, string $user, string $password, string $db)
    {
        $this->mysqli = new \mysqli($host, $user, $password, $db);
        if ($this->mysqli->connect_error) {
            exit('Ошибка подключения...');
        }
    }

    public function save(string $message): void
    {
        $this->mysqli->query($message);
    }
}