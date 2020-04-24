<?php
require dirname(__DIR__) . '/../../vendor/autoload.php';
use App\decorator\Answer\VanillaIcecream;
use App\decorator\Answer\Decorator\CashewNuts;
use App\decorator\Answer\Decorator\Fruits;

// ビーフカレー
$ice1 = new VanillaIcecream();
echo $ice1->getName();
echo $ice1->getPrice();

// ビーフカレー　卵トッピング
$ice2 = new VanillaIcecream();
$nuts_topping = new CashewNuts($ice2);
echo $nuts_topping->getName();
echo $nuts_topping->getPrice();

// ビーフカレー　チーズトッピング
$ice3 = new VanillaIcecream();
$fruits_topping = new Fruits($ice3);
echo $fruits_topping->getName();
echo $fruits_topping->getPrice();

// ビーフカレー　全部
$ice4 = new VanillaIcecream();
$all_topping = new Fruits(new CashewNuts($ice4));
echo $all_topping->getName();
echo $all_topping->getPrice();
