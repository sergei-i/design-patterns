<?php

namespace Multiton;

class FileSave
{
    private string $filePath;

    private static array $instances = [];

    private function __construct(string $string)
    {
        $this->filePath = $string . '-' . md5(microtime()) . '.txt';
    }

    public static function getInstance(string $instanceName): FileSave
    {
        if (!isset(self::$instances[$instanceName])) {
            self::$instances[$instanceName] = new static($instanceName);
        }

        return self::$instances[$instanceName];
    }

    public static function removeInstance(string $instanceName): void
    {
        if (array_key_exists($instanceName, self::$instances)) {
            unset(self::$instances[$instanceName]);
        }
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