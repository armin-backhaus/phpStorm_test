<?php

include_once __DIR__ . '/CheckInterface.php';

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
