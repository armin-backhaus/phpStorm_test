<?php

namespace DivisibleCheck;

class CheckSeven implements CheckInterface
{
    function check(int $number): bool
    {
        return $number % 7 == 0;
    }

    function getString(): string
    {
        return "Zipp";
    }
}
