<?php

namespace App;

class Email
{

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Start param is empty !
     */

    private $email;

    private function __construct(string $email)
    {
        $this->ensureIsValidEmail($email);
        $this->email = $email;
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

    /*----------------------- */

    public static function email($email)
    {
        return preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $email);
    }
}