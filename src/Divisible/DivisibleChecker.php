<?php

namespace Divisible;
class DivisibleChecker
{
    function test($test): void
    {
        echo "hello from CheckThree $test <br />";
    }

    function checkThree(int $number): bool
    {
        return $number % 3 == 0;
    }

    function checkFive(int $number): bool
    {
        return $number % 5 == 0;
    }

    function checkSeven(int $number): bool
    {
        return $number % 7 == 0;
    }
}
