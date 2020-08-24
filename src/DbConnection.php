<?php
namespace App;

class DbConnection
{

    protected function connect()
    {
        $dsn = 'mysql:host=localhost;dbname=user_management;port=3306;charset=UTF8';
        $user = 'root';
        $password = '';
        $pdo = new \PDO($dsn, $user, $password);
        return $pdo;

    }

    public function __construct()
    {}
}