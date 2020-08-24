<?php
use PHPUnit\Framework\TestCase;

//require_once __DIR__ . "/vendor/autoload.php";
class EmailTest extends TestCase
{

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Start param is empty !
     */

    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            App\Email::class,
            App\Email::fromString('users@example.com')
        );
    }
/*----------*/
    public function testemail()
    {

        $this->assertEquals(true, App\Email::email('test@test.dr'));
    }

}