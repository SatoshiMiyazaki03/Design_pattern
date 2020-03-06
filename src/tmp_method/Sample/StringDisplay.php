<?php
namespace App\tmp_method\Sample;
use App\tmp_method\Sample\AbstractDisplay;


class StringDisplay extends AbstractDisplay
{
    private $string;
    private $width;

    public function __construct($string)
    {
        $this->string = $string;
        $this->width = mb_strlen($string);
    }

    protected function open()
    {
        $this->outputLine();
    }

    protected function output()
    {
        echo "|" . $this->string . "|" . PHP_EOL;
    }

    protected function close()
    {
        $this->outputLine();
    }

    private function outputLine()
    {
        echo "+";
        for ($i = 0; $i < $this->width; $i++) {
            echo "-";
        }
        echo "+" . PHP_EOL;
    }

}
