<?php

class DivisibleBy
{
    private $divisibleChecker;

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

    function fiveAndSeven($i)
    {
        return
            //$i % 5 == 0 &&
            $this->divisibleChecker->checkFive($i);
            //$i % 7 == 0
            $this->divisibleChecker->checkSeven($i);
    }

    function threeAndFive($i)
    {
        return
            //$i % 3 == 0 &&
            $this->divisibleChecker->checkThree($i) &&
            //$i % 5 == 0
            $this->divisibleChecker->checkFive($i);
    }

    function threeAndSeven($i)
    {
        return
            $this->divisibleChecker->checkThree($i) &&
            //$i % 7 == 0
            $this->divisibleChecker->checkSeven($i);
    }

    function three($i)
    {
        //return $i % 3 == 0;
        return $this->divisibleChecker->checkThree($i);
    }

    function five($i)
    {
        return
            //$i % 5 == 0
            $this->divisibleChecker->checkFive($i);
    }

    function seven($i)
    {
        return
            //$i % 7 == 0
            $this->divisibleChecker->checkSeven($i);
    }
}