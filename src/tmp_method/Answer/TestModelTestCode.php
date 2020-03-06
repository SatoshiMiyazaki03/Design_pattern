<?php
namespace App\tmp_method\Answer;

use App\tmp_method\Answer\AbstractTestCode;

class TestModelTestCode extends AbstractTestCode{
    
    /**
     * 実装メソッド
     *
     * @return void
     */
    protected function setUp() {
        echo 'TestModel実行前準備'. PHP_EOL;
    }

    /**
     * 実装メソッド
     *
     * @return void
     */
    protected function testCase() {
        echo 'TestModelテスト実施'. PHP_EOL;
    }

}