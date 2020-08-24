<?php
use PHPUnit\Framework\TestCase;

//require_once __DIR__ . "/vendor/autoload.php";
class MathTest extends TestCase
{

    public function testDouble()
    {
        $this->assertEquals(4, App\Math::double(2));

    }
/*
public function testemail()
{

$this->assertEquals(false, App\Math::email('test'));
}*/
}