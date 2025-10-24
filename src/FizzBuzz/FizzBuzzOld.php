<?php

namespace FizzBuzz;

use Divisible\DivisibleBy;
use Output\OutputInterface;

class FizzBuzzOld extends AbstractFizzBuzz implements FizzBuzzInterface
{
    private $divisibleBy;

    public function __construct($lower, $upper, OutputInterface $outputStrategy)
    {
        parent::__construct($lower, $upper, $outputStrategy);

        $this->divisibleBy = new DivisibleBy();
    }

    function run(): void
    {
        //guard clause
        $this->assertLoopDirection($this->lower, $this->upper);

        for ($i = $this->lower; $i <= $this->upper; $i++) {

            if ($this->divisibleBy->threeAndFiveAndSeven($i)) {
                $this->outputStrategy->output("FizzBuzzZipp", $i);
            } elseif ($this->divisibleBy->fiveAndSeven($i)) {
                $this->outputStrategy->output("BuzzZipp", $i);
            } elseif ($this->divisibleBy->threeAndFive($i)) {
                $this->outputStrategy->output("FizzBuzz", $i);
            } elseif ($this->divisibleBy->threeAndSeven($i)) {
                $this->outputStrategy->output("FizzZipp", $i);
            } elseif ($this->divisibleBy->three($i)) {
                $this->outputStrategy->output("Fizz", $i);
            } elseif ($this->divisibleBy->five($i)) {
                $this->outputStrategy->output("Buzz", $i);
            } elseif ($this->divisibleBy->seven($i)) {
                $this->outputStrategy->output("Zipp", $i);
            } else {
                $this->outputStrategy->output($i, $i);
            }
        }
    }
}