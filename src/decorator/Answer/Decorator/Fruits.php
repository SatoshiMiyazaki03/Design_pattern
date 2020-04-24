<?php
namespace App\decorator\Answer\Decorator;
use App\decorator\Answer\Decorator\ToppingDecorator;
/**
 * CheeseDecorator class
 */
class Fruits extends ToppingDecorator
{
    private $ice;
    public function __construct($ice)
    {
        $this->ice = $ice;
    }

    public function getName(){
        return $this->ice->getName().'+ フルーツトッピング';
    }
    public function getPrice(){
        return $this->ice->getPrice() + 150;
    }
}
