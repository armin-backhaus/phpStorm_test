<?php

namespace DivisibleCheck;

interface CheckInterface
{
    function check(int $number): bool;
    function getString(): string;
}
