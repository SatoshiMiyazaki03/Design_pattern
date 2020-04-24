<?php
namespace App\decorator\Sample\Decorator;
use App\decorator\Sample\CurryRoux;
/**
 * Decorator class
 */
abstract class ToppingDecorator extends CurryRoux
{
    abstract protected function getName();
    abstract protected function getPrice();
}
