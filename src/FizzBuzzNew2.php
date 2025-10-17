<?php

include_once __DIR__ . '/FizzBuzzInterface.php';


class FizzBuzzNew2 implements FizzBuzzInterface
{
    function run()
    {

        $out = '';
        if ($this->checkThree->check($i)) {
            $out = $out . "Fizz";
        }
        if ($this->checkFive->check($i)) {
            $out = $out . "Buzz";
        }
        if ($this->checkSeven->check($i)) {
            $out = $out . "Zipp";
        }
        if (empty($out)) {
            $out = $i;
        }
        $this->outputStrategy->output($out, $i);
    }
}