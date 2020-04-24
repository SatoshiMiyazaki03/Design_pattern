<?php
namespace App\decorator\Sample;
use App\decorator\Sample\CurryRoux;

class BeefCurry extends CurryRoux
{
    private $name;
    private $price;

    public function __construct()
    {
        $this->name = 'ビーフカレー';
        $this->price = 730;
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
