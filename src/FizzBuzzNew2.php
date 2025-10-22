<?php

include_once __DIR__ . '/FizzBuzzInterface.php';
include_once __DIR__ . '/OutputWithColor.php';


class FizzBuzzNew2 implements FizzBuzzInterface
{
    private OutputInterface $outputStrategy;
    private int $upper;
    private int $lower;
    private int $checkThree;
    private int $checkFive;
    private int $checkSeven;

    function __construct(int $lower, int $upper, OutputInterface $outputStrategy)
    {
        $this->outputStrategy = $outputStrategy;
        $this->upper = $upper;
        $this->lower = $lower;
    }
    function run()
    {
        for ($i = $this->lower; $i <= $this->upper; $i++) {


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
}