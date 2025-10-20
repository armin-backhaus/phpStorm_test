<?php

include_once __DIR__ . '/FizzBuzzInterface.php';
include_once __DIR__ . '/outputStrategy';

class FizzBuzzNew1 implements FizzBuzzInterface
{
    function run()
    {
        $output = "";
        if ($i % 3 == 0) {
            $output = $output . "Fizz";
        }
        if ($i % 5 == 0) {
            $output = $output . "Buzz";
        }
        if ($i % 7 == 0) {
            $output = $output . "Zipp";
        }
        if ($i % 11 == 0) {
            $output = $output . "Elv";
        }
        if ($i % 13 == 0) {
            $output = $output . "Thir";
        }
        if (empty($output)) {
            $output = $i;
        }
        $this->outputStrategy->output($output, $i);
    }
}