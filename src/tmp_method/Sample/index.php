<?php
require dirname(__DIR__) . '/../../vendor/autoload.php';
use App\tmp_method\Sample\AbstractDisplay;
use App\tmp_method\Sample\CharDisplay;
use App\tmp_method\Sample\StringDisplay;

$char = new CharDisplay('a');
$char->display();
$string = new StringDisplay('Hello world');
$string->display();
