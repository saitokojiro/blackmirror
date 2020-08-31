<?php
namespace App;

class Vehicule
{

    private $brand;
    private $model;
    private $place;
    private $wheel;

    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getWheel()
    {
        return $this->wheel;
    }

    /**
     * @param mixed $wheel
     */
    public function setWheel(int $wheel)
    {
        if (!in_array($wheel, [2, 4, 6])) {
            throw new \InvalidArgumentException('invalid number');

        }
        $this->wheel = $wheel;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand(string $brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel(string $model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param mixed $place
     */
    public function setPlace(int $place)
    {
        if (!in_array($place, [1, 2, 4, 5, 7])) {
            throw new \InvalidArgumentException('invalid number');

        }
        $this->place = $place;
    }
}