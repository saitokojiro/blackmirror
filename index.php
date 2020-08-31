<?php
session_start();

use App\UserManagement;
require_once __DIR__ . "/vendor/autoload.php";

require './header.php';

$user = new UserManagement();

//Root URI
$user->rootService('/', 'login.php');
$user->rootService('/home', 'home.php');
$user->rootService('/login', 'login.php');
$user->rootService('/logout', 'logout.php');
$user->rootService('/404', 'error.php');

require './footer.php';