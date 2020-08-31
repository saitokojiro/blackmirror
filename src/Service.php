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

class Service
{
    public function secureString(string $var)
    {
        $var = trim($var);
        $var = strip_tags($var);
        $var = htmlspecialchars($var);
        $var = addslashes($var);

        return $var;
    }

    public function rootService(string $nameUrl, string $pathUrl)
    {

        if ($_SERVER['REQUEST_URI'] === $nameUrl) {
            //echo $twig->render($pathUrl);
            require './src/view/' . $pathUrl;
        }

    }
}