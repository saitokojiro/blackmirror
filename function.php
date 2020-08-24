<?php
/*
function autoload($classname)
{
$path = __DIR__ . '/model/' . $classname . '.php';

if (is_file($path)) {
require_once $path;
} else {
exit($classname);
}
}*/
namespace App;

class security
{
    public function secureString(string $var)
    {
        $var = trim($var);
        $var = strip_tags($var);
        $var = htmlspecialchars($var);
        $var = addslashes($var);

        return $var;
    }

    public function emailCheck($email)
    {
        return preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $email);
    }
    /*
spl_autoload_register('autoload');*/
}