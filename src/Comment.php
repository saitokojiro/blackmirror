<?php
namespace App;

use mysql_xdevapi\Exception;
use function PHPUnit\Framework\throwException;

class Comment {
    private $message;

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage(string $message)
    {
        $this->message = $message;
    }


}