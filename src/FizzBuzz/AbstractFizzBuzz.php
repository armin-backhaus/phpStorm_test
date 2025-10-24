<?php

namespace FizzBuzz;

use Error;

abstract class AbstractFizzBuzz implements FizzBuzzInterface
{
    protected function assertLoopDirection(int $lower, int $upper): void
    {
        if ($upper <= $lower) {

            throw new Error("Invalid Loop Direction");
        }
    }
}
