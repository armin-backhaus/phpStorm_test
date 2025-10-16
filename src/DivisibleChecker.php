<?php

class DivisibleChecker
{
    function test($test)
    {
      echo "hello from DivisibleChecker $test <br />";
    }

    function checkThree(int $number): bool
    {
        return $number % 3 == 0;
    }

    function checkFive(int $number): bool
    {
        return $number % 5 == 0;
    }

    function checkSeven($number): bool
    {
        return $number % 7 == 0;
    }
}