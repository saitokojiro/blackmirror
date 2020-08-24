<?php
use PHPUnit\Framework\TestCase;

//require_once __DIR__ . "/vendor/autoload.php";
class PasswordCheckTest extends TestCase
{

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Start param is empty !
     */

    private $okes;

    public function testpasswordChecks(): void
    {
        $this->assertInstanceOf(
            App\PasswordCheck::class,
            App\PasswordCheck::fromPassString('Abs18dqsd')
        );
    }

    public function setOkes($okes)
    {
        $this->okes = $okes;
    }
}