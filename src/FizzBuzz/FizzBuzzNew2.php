<?php

namespace FizzBuzz;

use DivisibleCheck\CheckFive;
use DivisibleCheck\CheckInterface;
use DivisibleCheck\CheckSeven;
use DivisibleCheck\CheckThree;
use Output\OutputInterface;

class FizzBuzzNew2 extends AbstractFizzBuzz implements FizzBuzzInterface
{
    private CheckInterface $checkThree;
    private CheckInterface $checkFive;
    private CheckInterface $checkSeven;

    function __construct(int $lower, int $upper, OutputInterface $outputStrategy)
    {
        parent::__construct($lower, $upper, $outputStrategy);

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