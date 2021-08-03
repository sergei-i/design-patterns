<?php

namespace Builder;

class MysqlQueryBuilder implements SqlQueryBuilder
{
    private object $query;

    public function init()
    {
        $this->query = new \stdClass();
    }

    public function select(array $fields): SqlQueryBuilder
    {
        $this->init();
        $this->query->select = 'SELECT ' . implode(', ', $fields) . ' ';

        return $this;
    }

    public function from(string $table): SqlQueryBuilder
    {
        $this->query->from = 'FROM ' . $table;

        return $this;
    }

    public function where(string $field, string $operator = '', string $value = ''): SqlQueryBuilder
    {
        if (func_num_args() === 2) {
            $this->query->where[] = $field . ' = ' . $value;
        } else {
            $this->query->where[] = $field . ' ' . $operator . ' ' . $value;
        }

        return $this;
    }

    public function limit(int $start, int $offset): SqlQueryBuilder
    {
        $this->query->limit = ' LIMIT ' . $start . ' OFFSET ' . $offset;

        return $this;
    }

    public function getQuery(): string
    {
        $sqlQuery = '';
        $sqlQuery .= $this->query->select;
        $sqlQuery .= $this->query->from;

        if (!empty($this->query->where)) {
            $sqlQuery .= ' WHERE ' . implode(' AND ', $this->query->where);
        }

        if (!empty($this->query->limit)) {
            $sqlQuery .= $this->query->limit;
        }

        $sqlQuery .= ';';

        return $sqlQuery;
    }
}