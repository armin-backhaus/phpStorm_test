<?php

include_once __DIR__ . '/CheckInterface.php';

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
