<?php
namespace App;

class UserManagement extends DbConnection
{

    public function __construct()
    {
        echo "test <br>";

    }

    public function secureString(string $var)
    {
        $var = trim($var);
        $var = strip_tags($var);
        $var = htmlspecialchars($var);
        $var = addslashes($var);

        return $var;
    }

    public function getUsers()
    {
        $sql = "SELECT * FROM account";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()) {
            echo $row['id'] . '<br>';
            echo $row['email'] . '<br>';
            echo $row['password'] . '<br> <hr> <br>';
        }

        // $this->connect();

    }

    public function registerDB($email, $password)
    {
        if (preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $email)) {

            $email = $this->secureString($email);

            $password = $this->secureString($password);

            echo $email;
            echo $password;

            $query = "INSERT INTO account (`email`, `password`) VALUES ('$email','$password')";
            $query;
            $result = $this->connect()->exec($query);
            if ($result > 0) {
                // return $result;
                echo "your account is created";
                return true;
            } else {

                return false;
            }
        } else {
            echo 'invalid ';
        }
    }

    public function loginDB($email, $password)
    {
        // $email = $this->secureString($email);

        //$password = $this->secureString($password);

        $sql = "SELECT * FROM account";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()) {

            if ($row['email'] === $email && $row['password'] === $password) {
                echo 'connected : ';
                echo $row['email'] . ' ' . $row['password'];

                session_start();

                $_SESSION["email"] = $row['email'];
                $_SESSION["password"] = $row['password'];

            }}

    }

}