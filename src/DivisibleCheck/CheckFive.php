<?php

namespace DivisibleCheck;

class CheckFive implements CheckInterface
{
    function check(int $number): bool
    {
        return $number % 5 == 0;
    }
    function getString(): string
    {
        return "Buzz";
    }

}
