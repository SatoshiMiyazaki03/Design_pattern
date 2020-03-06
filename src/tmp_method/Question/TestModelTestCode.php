<?php
namespace App\tmp_method\Question;

class TestModelTestCode {

    /**
     * 実行メソッド
     *
     * @return void
     */
    public function run() {
        $this->setUp();
        $this->testCase();
    }

    private function setUp() {
        echo 'TestModel実行前準備'. PHP_EOL;
    }

    private function testCase() {
        echo 'TestModelテスト実施'. PHP_EOL;
    }

}