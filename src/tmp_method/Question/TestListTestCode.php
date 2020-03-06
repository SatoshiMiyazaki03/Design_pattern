<?php 
namespace App\tmp_method\Question;

class TestListTestCode {
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
        echo 'TestList実行前準備'. PHP_EOL;
    }

    private function testCase() {
        echo 'TestListテスト実施'. PHP_EOL;
    }

}

