<?php

namespace DivisibleCheck;

class CheckEleven implements CheckInterface
{
    function check(int $number): bool
    {
        return $number % 11 == 0;
    }
    function getString(): string
    {
        return "Elv";
    }

}
