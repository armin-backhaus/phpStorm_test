<?php

include_once __DIR__ . '/FizzBuzzInterface.php';
include_once __DIR__ . '/OutputWithColor.php';


class FizzBuzzNew2 implements FizzBuzzInterface
{
    private OutputInterface $outputStrategy;
    private int $upper;
    private int $lower;
    private $checkThree;
    private $checkFive;
    private $checkSeven;

    function __construct(int $lower, int $upper, OutputInterface $outputStrategy)
    {
        $this->outputStrategy = $outputStrategy;
        $this->upper = $upper;
        $this->lower = $lower;
        $this->checkThree = new CheckThree();
        $this->checkFive = new CheckFive();
        $this->checkSeven = new CheckSeven();
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