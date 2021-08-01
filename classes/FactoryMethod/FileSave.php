<?php

namespace FactoryMethod;

class FileSave implements ISave
{
    private string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function save(string $message): void
    {
        file_put_contents($this->filePath, $message);
    }
}