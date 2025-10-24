<?php

namespace FizzBuzz;

use Error;
use Output\OutputInterface;

abstract class AbstractFizzBuzz implements FizzBuzzInterface
{
    protected int $upper;
    protected int $lower;
    protected OutputInterface $outputStrategy;

    function __construct(int $lower, int $upper, OutputInterface $outputStrategy)
    {
        $this->upper = $upper;
        $this->lower = $lower;
        $this->outputStrategy = $outputStrategy;
    }

    protected function assertLoopDirection(int $lower, int $upper): void
    {
        if ($upper <= $lower) {

            throw new Error("Invalid Loop Direction");
        }
    }
}
