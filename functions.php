<?php

function projectAutoload($class)
{
    $baseDir = __DIR__ . './classes/';
    $prefix = '';
    $prefixLength = strlen($prefix);

    if (strncmp($prefix, $class, $prefixLength !== 0)) {
        return;
    }

    $relativeClass = substr($class, $prefixLength);
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    if (file_exists($file)) {
        require $file;
    }
}