<?php
namespace App\decorator\Answer;
use App\decorator\Answer\Icecream;

class VanillaIcecream extends Icecream
{
    private $name;
    private $price;

    public function __construct()
    {
        $this->name = 'バニラアイス';
        $this->price = 400;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
