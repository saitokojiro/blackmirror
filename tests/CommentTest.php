<?php

use App\Comment;
use PHPUnit\Framework\TestCase;

class CommentTest extends TestCase
{
    public function testValidMessageUser()
    {
        //$this->expectException(\LogicException::class);

        $pdo = $this->getMockBuilder(\pdo::class)
            ->disableOriginalConstructor()
            ->getMock();

        $pdo->method('exec')->willReturn(true);

        $messageUser = new Comment();
        $messageUser->setMessage("it's very fun");

        $this->assertTrue($pdo->exec($messageUser->getMessage()));
        //$this->assertSame("it's very fun", $messageUser->getMessage());

    }
}