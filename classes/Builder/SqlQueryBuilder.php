<?php

namespace Builder;

interface SqlQueryBuilder
{
    public function select(array $fields): SqlQueryBuilder;

    public function from(string $table): SqlQueryBuilder;

    public function where(string $field, string $operator = '', string $value = ''): SqlQueryBuilder;

    public function limit(int $start, int $offset): SqlQueryBuilder;

    public function getQuery(): string;
}