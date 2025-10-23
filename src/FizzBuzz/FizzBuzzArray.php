<?php

namespace FizzBuzz;

use DivisibleCheck\CheckThree;
use DivisibleCheck\CheckFive;
use DivisibleCheck\CheckSeven;
use DivisibleCheck\CheckEleven;
use Output\OutputInterface;

class FizzBuzzArray implements FizzBuzzInterface
{
    private OutputInterface $outputStrategy;
    private int $upper;
    private int $lower;
    private array $checker;

    function __construct(int $lower, int $upper, OutputInterface $outputStrategy)
    {
        $this->lower = $lower;
        $this->upper = $upper;
        $this->outputStrategy = $outputStrategy;
        $this->checker = [];
        $this->checker[] = new CheckThree();
        $this->checker[] = new CheckFive();
        $this->checker[] = new CheckSeven();
        $this->checker[] = new CheckEleven();
    }

    function run(): void
    {
        for ($i = $this->lower; $i <= $this->upper; $i++) {
            $o = '';
            foreach ($this->checker as $checkObject) {
                if ($checkObject->check($i)) {
                    $o = $o . $checkObject->getString();
                }
            }
            if (empty($o)) {
                $o = $i;
            }
            $this->outputStrategy->output($o, $i);
        }
    }
}