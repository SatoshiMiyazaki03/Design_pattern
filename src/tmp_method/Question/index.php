<?php
require dirname(__DIR__) . '/../../vendor/autoload.php';
use App\tmp_method\Question\TestModelTestCode;
use App\tmp_method\Question\TestListTestCode;

$model = new TestModelTestCode();
$model->run();

$list = new TestListTestCode();
$list->run();
