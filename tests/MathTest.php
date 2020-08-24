<?php

//use App\Product;
use PHPUnit\Framework\TestCase;



//require_once __DIR__ . "/vendor/autoload.php";
class MathTest extends TestCase
{

    public function testcomputeTVAFoodProduct()
    {
        $product = new App\Math('Un produit', App\Math::FOOD_PRODUCT, 20);

        $this->assertSame(1.1, $product->computeTVA());
    }
    
/*
public function testemail()
{

$this->assertEquals(false, App\Math::email('test'));
}*/
}