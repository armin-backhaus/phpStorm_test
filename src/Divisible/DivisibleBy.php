<?php

namespace Divisible;

class DivisibleBy
{
    private DivisibleChecker $divisibleChecker;

    function __construct()
    {
        $this->divisibleChecker = new DivisibleChecker();
    }

    public function threeAndFiveAndSeven($i): bool
    {
        //return $i % 3 == 0 && $i % 5 == 0 && $i % 7 == 0;
        return
            $this->divisibleChecker->checkThree($i) &&
            //$i % 5 == 0 &&
            $this->divisibleChecker->checkFive($i);
        //$i % 7 == 0
        $this->divisibleChecker->checkSeven($i);
    }

    function fiveAndSeven($i): bool
    {
        return
            //$i % 5 == 0 &&
            $this->divisibleChecker->checkFive($i);
        //$i % 7 == 0
        $this->divisibleChecker->checkSeven($i);
    }

    function threeAndFive($i): bool
    {
        return
            //$i % 3 == 0 &&
            $this->divisibleChecker->checkThree($i) &&
            //$i % 5 == 0
            $this->divisibleChecker->checkFive($i);
    }

    function threeAndSeven($i): bool
    {
        return
            $this->divisibleChecker->checkThree($i) &&
            //$i % 7 == 0
            $this->divisibleChecker->checkSeven($i);
    }

    function three($i): bool
    {
        //return $i % 3 == 0;
        return $this->divisibleChecker->checkThree($i);
    }

    function five($i): bool
    {
        return
            //$i % 5 == 0
            $this->divisibleChecker->checkFive($i);
    }

    function seven($i): bool
    {
        return
            //$i % 7 == 0
            $this->divisibleChecker->checkSeven($i);
    }
}