<?php

use App\Vehicule;
use PHPUnit\Framework\TestCase;

class VehiculeTest extends TestCase
{

    public function testCarBrand()
    {
        $car = new Vehicule();

        $car->setBrand('test');
        $this->assertSame('test', $car->getBrand());
    }
    public function testCarModel()
    {
        $car = new Vehicule();

        $car->setModel('test');
        $this->assertSame('test', $car->getModel());
    }

    public function testCarNbWheel()
    {
        $car = new Vehicule();

        $car->setWheel(2);
        $this->assertSame(2, $car->getWheel());
    }

    public function testInvalidCarNbWheel()
    {
        $this->expectException(\InvalidArgumentException::class);
        $car = new Vehicule();

        $car->setWheel(1);
        $this->assertSame(1, $car->getWheel());
    }

}