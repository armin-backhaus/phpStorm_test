<?php

namespace FizzBuzz;
use Error;
use Output\OutputInterface;

class FizzBuzzNew1 implements FizzBuzzInterface
{
    private OutputInterface $outputStrategy;
    private int $upper;
    private int $lower;


    function __construct(int $lower, int $upper, OutputInterface $outputStrategy)
    {
        $this->lower = $lower;
        $this->upper = $upper;
        $this->outputStrategy = $outputStrategy;
    }

    function assertLoopDirection(int $lower, int $upper)
    {
        if ($upper <= $lower) {

            throw new Error("Invalid Loop Direction");
        }
    }

    function run(): void
    {
        //guard clause
        $this->assertLoopDirection($this->lower, $this->upper);

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