<?php 
class DbConnection
{
    private static $dsn = 'mysql:host=localhost;dbname=user_management;charset=UTF8';
    private static $user = 'root';
    private static $password = '';
    private static $instance = null ;

    public static function getInstance()
    {
        if(DbConnection::$instance === null)
        {
            DbConnection::$instance = new PDO(
                DbConnection::$dsn,
                DbConnection::$user,
                DbConnection::$password,
                //[PDO::ATTR_ERMODE => PDO::ERMODE_EXCEPTION]
            );
        }
        //return DbConnection::$instance;
    }
    //public function __construct()
    //{}

}