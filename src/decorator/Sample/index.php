<?php
require dirname(__DIR__) . '/../../vendor/autoload.php';
use App\decorator\Sample\BeefCurry;
use App\decorator\Sample\Decorator\Egg;
use App\decorator\Sample\Decorator\Cheese;

// ビーフカレー
$curry1 = new BeefCurry();
echo $curry1->getName();
echo $curry1->getPrice();

// ビーフカレー　卵トッピング
$curry2 = new BeefCurry();
$egg_topping = new Egg($curry2);
echo $egg_topping->getName();
echo $egg_topping->getPrice();

// ビーフカレー　チーズトッピング
$curry3 = new BeefCurry();
$cheese_topping = new Cheese($curry3);
echo $cheese_topping->getName();
echo $cheese_topping->getPrice();

// ビーフカレー　全部
$curry4 = new BeefCurry();
$all_topping = new Egg(new Cheese($curry3));
echo $all_topping->getName();
echo $all_topping->getPrice();
