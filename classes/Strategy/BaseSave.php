<?php

namespace Strategy;

abstract class BaseSave implements IFileSave
{
    public string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }
}