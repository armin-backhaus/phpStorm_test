<?php

include_once __DIR__ . '/FizzBuzzInterface.php';
include_once __DIR__ . '/OutputWithColor.php';
class FizzBuzzNew1 implements FizzBuzzInterface
{
    private OutputInterface $outputStrategy;
    private int $upper;
    private int $lower;


    function __construct(int $lower, int $upper, OutputInterface $outputStrategy)
    {
        //$this->outputStrategy = new OutputWithColor();
        $this->outputStrategy = $outputStrategy;
        $this->upper = $upper;
        $this->lower = $lower;
    }

    function run()
    {
        for ($i = $this->lower; $i <= $this->upper; $i++) {

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
}