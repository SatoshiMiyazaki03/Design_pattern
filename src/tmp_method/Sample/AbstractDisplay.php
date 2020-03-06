<?php
namespace App\tmp_method\Sample;
/**
 * Template class
 */
abstract class AbstractDisplay
{
    //抽象メソッド
    abstract protected function open();
    abstract protected function output();
    abstract protected function close();
    /**
     * 実行メソッド
     *
     * @return void
     */
    public function display()
    {
        $this->open();
        for ($i = 0; $i < 5; $i++) {
            $this->output();
        }
        $this->close();
    }
}
