<?php 
namespace App\tmp_method\Answer;
use App\tmp_method\Answer\AbstractTestCode;

class TestListTestCode extends AbstractTestCode{

    /**
     * 実装メソッド
     *
     * @return void
     */
    protected function setUp() {
        echo 'TestList実行前準備'. PHP_EOL;
    }
    /**
     * 実装メソッド
     *
     * @return void
     */
    protected function testCase() {
        echo 'TestListテスト実施'. PHP_EOL;
    }

}

