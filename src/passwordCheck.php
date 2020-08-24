<?php
namespace App;

class PasswordCheck
{
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Start param is empty !
     */

    private $password;

    private function __construct(string $password)
    {

        $this->passwordChecks($password);

        $this->password = $password;
    }

    public static function fromPassString(string $password)
    {
        return new self($password);
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
        }
    }

}