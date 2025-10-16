<?php

include_once __DIR__ . '/CheckInterface.php';

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
