<?php

namespace App;

class User
{

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Start param is empty !
     */


     


/*
    private $email;
    private $password;

    private function __construct($password)
    {
        
       // $this->ensureIsValidEmail($email);
        //$this->email = $email;

        $this->passwordChecks($password);
        $this->password = $password;
    }

    public static function fromString(string $email): self
    {
        return new self($email);
    }

    private function ensureIsValidEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid email address',
                    $email
                )
            );
        }
    }
    

    public static function fromPassString(string $password)
    {
       // return new self($password);
       if (!preg_match(" /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{8,16}$/ ", $password)) {
        throw new \InvalidArgumentException(
            sprintf(
                '"%s" is not a valid password',
                $password
            )
        );
    }
    }

    private function passwordChecks(string $password)
    {
        if (!preg_match(" /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{8,16}$/ ", $password)) {
            throw new \InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid password',
                    $password
                )
            );
        }else 
        {
            
        }
    }

	

	

	function getPassword() { 
 		return $this->password; 
	} */

    private $email;
     private $password;

     public function __construct($email , $password)
     {
        $this->email = $email;
        $this->password = $password;
     }


	function getEmail() { 
 		return $this->email; 
	} 

	function setEmail($email) {  
       
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            throw new \InvalidArgumentException(
                sprintf(
                    '"%s" is valid',
                    $email
                )
            );
        }
        $this->email = $email; 
	} 
}