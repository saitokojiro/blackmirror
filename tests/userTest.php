<?php
use PHPUnit\Framework\TestCase;

//require_once __DIR__ . "/vendor/autoload.php";
class userTest extends TestCase
{

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Start param is empty !
     */

     public function testsetUser()
     {
        $product = new App\User('test@test.fr', 'password');

        $this->assertSame($product->setEmail('test@test.fr','test@test.fr' ));
     }
/*
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            App\User::class,
            App\User::fromString('users@example.com')
        );
    }
*/

/*

    public function testpasswordChecks(): void
    {
        $this->assertInstanceOf(
            App\User::class,
            App\User::fromPassString('Abs18dqsd_')
        );
    }*/


}