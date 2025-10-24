<?php

namespace FizzBuzz;

use DivisibleCheck\CheckFive;
use DivisibleCheck\CheckSeven;
use DivisibleCheck\CheckThree;
use Error;
use Output\OutputInterface;

class FizzBuzzNew2 extends AbstractFizzBuzz implements FizzBuzzInterface
{
    private OutputInterface $outputStrategy;
    private int $upper;
    private int $lower;
    private $checkThree;
    private $checkFive;
    private $checkSeven;

    function __construct(int $lower, int $upper, OutputInterface $outputStrategy)
    {
        $this->lower = $lower;
        $this->upper = $upper;
        $this->outputStrategy = $outputStrategy;
        $this->checkThree = new CheckThree();
        $this->checkFive = new CheckFive();
        $this->checkSeven = new CheckSeven();
    }

    function run(): void
    {
        //guard clause
        $this->assertLoopDirection($this->lower, $this->upper);

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