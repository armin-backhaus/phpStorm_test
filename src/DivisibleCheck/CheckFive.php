<?php

include_once __DIR__ . '/CheckInterface.php';

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
