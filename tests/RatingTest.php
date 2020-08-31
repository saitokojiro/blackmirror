<?php

use PHPUnit\Framework\TestCase;

class RatingTest extends TestCase
{
    /*
    public function testIsRatingPost()
    {
        $ratingTest = new App\Rating([5, 5, 5, 5, 5, 5], 'hello', 3);
        $this->assertInstanceOf(App\Rating::class, $ratingTest);
    }

    public function testRatingContentWithTheMessage()
    {
        $ratingValueTest = new App\Rating([0], 'your message', 2);
        $this->assertInstanceOf(App\Rating::class, $ratingValueTest);

        $ratingValueTestTwo = new App\Rating([0], 'your message 2', 4);
        $this->assertInstanceOf(App\Rating::class, $ratingValueTestTwo);
    }
*/

    public function testRatingUser()
    {
        $ratingTest = new App\Rating();
        $ratingTest->setRatingUsers(5);

        $this->assertSame(5, $ratingTest->getRatingUsers());


        $ratingTest1 = new App\Rating();
        $ratingTest1->setRatingUsers(0);

        $this->assertSame(0, $ratingTest1->getRatingUsers());
    }

    public function testInvalidRating()
    {
        $this->expectException(\InvalidArgumentException::class);
        $ratingTest = new App\Rating();
        $ratingTest->setRatingUsers(6);

        //$this->assertSame(6, $ratingTest->getRatingUsers());
    }
}