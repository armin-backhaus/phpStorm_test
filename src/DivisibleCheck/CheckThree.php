<?php

namespace DivisibleCheck;

class CheckThree implements CheckInterface
{
    function check(int $number): bool
    {
        return $number % 3 == 0;
    }
    function getString(): string
    {
        return "Fizz";
    }
}
