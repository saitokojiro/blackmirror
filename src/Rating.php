<?php
namespace App;

use http\Exception\InvalidArgumentException;

class Rating
{
    private $ratingArray;
    private $message;
    private $coefRating;
    private $ratingUsers;

    public function __construct(/*array $ratingArray, string $message, int $rating*/)
    {
        //$this->ratingObject($ratingArray);
        //$this->ratingContentWithTheMessage($message, $rating);
    }

    public function ratingObject(array $ratingArray)
    {

        if ($ratingArray[0] == 0) {
            return false;
        }
        for ($i = 0; $i < count($ratingArray); ++$i) {
            $this->ratingArray = $this->ratingArray + $ratingArray[$i];
        }

        return $this->ratingArray / count($ratingArray);
    }

    public function ratingContentWithTheMessage(string $message, int $rating)
    {

        if ($rating > -1) {
            if ($rating < 5 && $rating != -1) {

                return true;

            } else {
                throw new \InvalidArgumentException(
                    sprintf(
                        'error rating'
                    )
                );
            }

        } else {
            throw new \InvalidArgumentException(
                sprintf(
                    'error rating'
                )
            );
        }
    }

    /**
     * @return mixed
     */
    public function getRatingUsers()
    {
        return $this->ratingUsers;
    }

    /**
     * @param mixed $ratingUsers
     */
    public function setRatingUsers(int $ratingUsers)
    {
        if($ratingUsers > 5 || $ratingUsers < 0)
        {

            throw new \InvalidArgumentException('error rating');
        }
        $this->ratingUsers = $ratingUsers;


    }

}