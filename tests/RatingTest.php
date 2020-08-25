<?php

use PHPUnit\Framework\TestCase;

class Rating extends TestCase
{
   // public ratings = [5,5,6,8] ; 
    public function testIsRatingPost()
    {
        $newtest = new App\rating([5,5,5,5,5,5], 'hello', 3);
        $this->assertInstanceOf(App\Rating::class, $newtest);
    }

    public function testRatingContentWithTheMessage()
    {
        $newtest = new App\rating([5,5,5,5,5,5], 'hello',0);
        $this->assertInstanceOf(App\Rating::class, $newtest);
    }
}