<?php
use PHPUnit\Framework\TestCase;

//require_once __DIR__ . "/vendor/autoload.php";
use App\User;
class UserTest extends TestCase
{

/*
    public function testUser()
    {
        $newUser = new User('test@test.fr', "xj#E4'MFLS~(rnG2");
        $this->assertInstanceOf(App\User::class,$newUser);

    }
*/
/*
    public function testRatingUser()
    {
        $ratingTest = new App\Rating();
        $ratingTest->setRatingUsers(5);

        $this->assertSame(5, $ratingTest->getRatingUsers());


        $ratingTest1 = new App\Rating();
        $ratingTest1->setRatingUsers(0);

        $this->assertSame(0, $ratingTest1->getRatingUsers());
    }*/

    public function testvalidEmail()
    {
        //$this->expectException(\InvalidArgumentException::class);
        $emailTest = new User();
        $emailTest->setEmail('hello@hello.fr');

        $this->assertSame('hello@hello.fr', $emailTest->getEmail());
    }

    public function testInvalidEmail()
    {
        $this->expectException(\InvalidArgumentException::class);
        $ratingTest = new User();
        $ratingTest->setEmail('hello.fr');

        $this->assertSame('hello.fr', $ratingTest->getEmail());
    }

    public function testvalidPassword()
    {
        //$this->expectException(\InvalidArgumentException::class);
        $ratingTest = new User();
        $ratingTest->setpassword('3mwy(`HLM}FQMCf;');

        $this->assertSame('3mwy(`HLM}FQMCf;', $ratingTest->getpassword());
    }

    public function testInvalidPassword()
    {
        $this->expectException(\InvalidArgumentException::class);
        $ratingTest = new User();
        $ratingTest->setpassword('Asd8');

        $this->assertSame("Asd8", $ratingTest->getpassword());
    }

}