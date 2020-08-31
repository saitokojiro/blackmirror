<?php
session_start();

use App\UserManagement;
require_once __DIR__ . "/vendor/autoload.php";

require './header.php';

$user = new UserManagement();

function rootService(string $nameUrl, string $pathUrl)
{

    if ($_SERVER['REQUEST_URI'] === $nameUrl) {
        //echo $twig->render($pathUrl);
        require './src/view/' . $pathUrl;
    }

}

//Root URI
rootService('/', 'login.php');
rootService('/home', 'home.php');
rootService('/login', 'login.php');
rootService('/logout', 'logout.php');
rootService('/404', 'error.php');

require './footer.php';