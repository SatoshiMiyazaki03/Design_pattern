<?php
require dirname(__DIR__) . '/../../vendor/autoload.php';
use App\tmp_method\Answer\TestModelTestCode;
use App\tmp_method\Answer\TestListTestCode;

$model = new TestModelTestCode();
$model->run();

$list = new TestListTestCode();
$list->run();
