<?php
namespace App\decorator\Sample\Decorator;
use App\decorator\Sample\Decorator\ToppingDecorator;
/**
 * Egg class
 */
class Egg extends ToppingDecorator
{
    private $curry;
    public function __construct($currry)
    {
        $this->curry = $currry;
    }

    public function getName(){
        return $this->curry->getName().'+ 卵トッピング';
    }
    public function getPrice(){
        return $this->curry->getPrice() + 100;
    }
}
