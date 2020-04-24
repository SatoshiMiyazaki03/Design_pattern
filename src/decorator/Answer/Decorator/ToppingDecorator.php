<?php
namespace App\decorator\Answer\Decorator;
use App\decorator\Answer\Icecream;
/**
 * Decorator class
 */
abstract class ToppingDecorator extends Icecream
{
    abstract protected function getName();
    abstract protected function getPrice();
}
