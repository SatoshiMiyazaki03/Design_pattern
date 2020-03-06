<?php
namespace App\tmp_method\Sample;
use App\tmp_method\Sample\AbstractDisplay;

class CharDisplay extends AbstractDisplay
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    protected function open()
    {
        echo "<<";
    }

    protected function output()
    {
        echo "|" . $this->string . "|" ;
    }

    protected function close()
    {
        echo ">>" . PHP_EOL;
    }
}
