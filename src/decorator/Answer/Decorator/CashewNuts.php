<?php
namespace App\decorator\Answer\Decorator;
use App\decorator\Answer\Decorator\ToppingDecorator;
/**
 * CashewNuts class
 */
class CashewNuts extends ToppingDecorator
{
    private $ice;
    public function __construct($ice)
    {
        $this->ice = $ice;
    }

    public function getName(){
        return $this->ice->getName().'+ カシューナッツトッピング';
    }
    public function getPrice(){
        return $this->ice->getPrice() + 100;
    }
}
