<?php

namespace Singleton;

class FileSave
{
    private string $filePath;

    private static ?FileSave $instance = null;

    private function __construct()
    {
        $this->filePath = md5(microtime()) . '.txt';
    }

    public static function getInstance(): FileSave
    {
        if (is_null(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    public function save(string $dir): void
    {
        $content = 'Some text...';
        $fullFilePath = $dir . '/' . $this->filePath;

        if (file_exists($fullFilePath)) {
            $content = file_get_contents($fullFilePath) . $content;
        }

        file_put_contents($fullFilePath, $content);
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}