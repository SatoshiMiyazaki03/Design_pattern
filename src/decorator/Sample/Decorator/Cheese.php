<?php
namespace App\decorator\Sample\Decorator;
use App\decorator\Sample\Decorator\ToppingDecorator;
/**
 * CheeseDecorator class
 */
class Cheese extends ToppingDecorator
{
    private $curry;
    public function __construct($currry)
    {
        $this->curry = $currry;
    }

    public function getName(){
        return $this->curry->getName().'+ チーズトッピング';
    }
    public function getPrice(){
        return $this->curry->getPrice() + 150;
    }
}
