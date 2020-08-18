<?php

function autoload($classname)
{
    $path = __DIR__ . '/model/' . $classname . '.php';

    if (is_file($path)) {
        require_once $path;
    } else {
        exit($classname);
    }
}

function secureString(string $var)
{
    $var = trim($var);
    $var = strip_tags($var);
    $var = htmlspecialchars($var);
    $var = addslashes($var);

    return $var;
}

spl_autoload_register('autoload');