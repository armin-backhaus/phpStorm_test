<?php

namespace Website\blocks;

use FizzBuzz\FizzBuzzOld;
use Output\OutputWithColor;
use Website\Website;

class FizzBuzzOneToThreeBuilder
{
    private $website1;

    public function __construct()
    {
        $this->website1 = new Website();
    }
    public function fizzBuzzOneToThree()
    {
        return [
            $this->website1->h3Tags("FizzBuzz from one to three"),
            (new FizzBuzzOld(1, 3, new OutputWithColor()))->run2(),
        ];
    }
}
