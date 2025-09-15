<?php

class DivisibleBy
{

    public function threeAndFiveAndSeven($i): bool
    {
        return $i % 3 == 0 && $i % 5 == 0 && $i % 7 == 0;
    }

    function fiveAndSeven($i)
    {
        return $i % 5 == 0 && $i % 7 == 0;
    }

    function threeAndFive($i)
    {
        return $i % 3 == 0 && $i % 5 == 0;
    }

    function threeAndSeven($i)
    {
        return $i % 3 == 0 && $i % 7 == 0;
    }

    function three($i)
    {
        return $i % 3 == 0;
    }

    function five($i)
    {
        return $i % 5 == 0;
    }

    function seven($i)
    {
        return $i % 7 == 0;
    }
}