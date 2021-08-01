<?php

namespace FactoryMethod;

class MysqlSaveFactory implements ISaveFactory
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

    public function createSaver(): ISave
    {
        return new MysqlSave($this->host, $this->user, $this->password, $this->db);
    }
}