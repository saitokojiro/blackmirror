<?php
class user_management
{
    /*
    public $email;
    public $emailV;
    public $password;*/

    

    function loginDB(string $email, string $password)
    {
       

       $email = secureString($email);

       $password = secureString($password);

       $query ="
       INSERT INTO account
       (`email`, `password`)
       VALUES ('$email','$password');";

       $result = DbConnection::$instance->exec($query);
       
       if($result > 0)
       {
           return true;
       }
       else{
           return false ;
       }

    }
}