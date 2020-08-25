<?php
use PHPUnit\Framework\TestCase;

//require_once __DIR__ . "/vendor/autoload.php";
use App\User;
class UserTest extends TestCase
{


    public function testUser()
    {
        $newUser = new User('test@test.fr', "xj#E4'MFLS~(rnG2");
        $this->assertInstanceOf(App\User::class,$newUser);

    }


}