<?php

namespace App;

class User
{

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Start param is empty !
     */

    private $email;
    private $password;

    public function __construct($email, $password)
    {
        if($this->emailVerification($email))
        {
            $this->email = $email;
        }
        if($this->passwordVerification($password))
        {
            $this->password = $password;
        }
        //emailVerification();
        
    }


    private function emailVerification($email)
    {
        if(!empty($email))
        {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                throw new \InvalidArgumentException(
                    sprintf(
                    '"%s" is not a valid email address',
                    $email
                    )
                );
            }
            return true;
        }return false;
    }

    private function passwordVerification($password)
    {
        if(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&_*(),.?":{}|<>])(?!.*\s).{8,16}$/ ', $password))
        {
            throw new \InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid password ',
                    $password
                )
            );
        }return true;
    }
}