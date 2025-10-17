<?php

include_once __DIR__ . '/FizzBuzzInterface.php';
include_once __DIR__ . '/DivisibleBy.php';

class FizzBuzzOld implements FizzBuzzInterface
{
    private $divisibleBy;
    private $lower;
    private $upper;
    private $outputStrategy;

    public function __construct($lower, $upper, OutputInterface $outputStrategy)
    {
        $this->divisibleBy = new DivisibleBy();


        $this->lower = $lower;
        $this->upper = $upper;
        $this->outputStrategy = $outputStrategy;
    }

    function run()
    {
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