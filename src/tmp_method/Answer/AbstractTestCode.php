<?php
namespace App\tmp_method\Answer;

abstract class AbstractTestCode
{
    //抽象メソッド
    abstract protected function setUp();
    abstract protected function testCase();

    /**
     * 実行メソッド
     * @return void
     */
    public function run() {
        $this->setUp();
        $this->testCase();
    }
}
