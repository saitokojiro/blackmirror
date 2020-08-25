<?php
session_start();
use App\UserManagement;

require_once __DIR__ . "/vendor/autoload.php";

$user = new UserManagement();
$user->getUsers();

var_dump($_SESSION);

require './header.php';
var_dump(pathinfo('./src/view/'));

//Root URI
if($_SERVER['REQUEST_URI'] === '/')
{
    require './src/view/login.php';
}

if($_SERVER['REQUEST_URI'] === '/home')
{
    require './src/view/home.php';
}

if($_SERVER['REQUEST_URI'] === '/login')
{
    require './src/view/login.php';
}

if($_SERVER['REQUEST_URI'] === '/logout')
{
    require './src/view/logout.php';
}

if($_SERVER['REQUEST_URI'] === '/404')
{
    require './src/view/error.php';
}

require './footer.php';