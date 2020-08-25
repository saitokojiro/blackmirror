<?php
namespace App;
class Rating 

{
   private $ratingArray ;

    public function __construct(array $ratingArray, string $message , int $rating)
    {
        $this->ratingObject($ratingArray);
        $this->ratingContentWithTheMessage($message, $rating);
    }
    
    public function ratingObject(array $ratingArray)
    {
        var_dump($ratingArray);
        var_dump("------------");
        var_dump(count($ratingArray));
        var_dump("------------");
        for($i = 0 ; $i< count($ratingArray); ++$i)
        {
            var_dump("------------");
            $this->ratingArray = $this->ratingArray + $ratingArray[$i];
            //var_dump($this->ratingArray);
        }
        
        var_dump($this->ratingArray / count($ratingArray));
    }

    public function ratingContentWithTheMessage(string $message, int $rating)
    {
        
        if ($rating >-1)
        {
            var_dump('ok1');
            if($rating < 5 && $rating != 0)
        {
            var_dump('ok');
        }
        else {
            var_dump('bip');
        }
           
        }else {
            var_dump('bip');
        }
    }
}