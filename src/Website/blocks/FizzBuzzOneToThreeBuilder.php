<?php

namespace Website\blocks;

use FizzBuzz\FizzBuzzOld;
use Output\OutputWithColor;
use Website\WebsiteBuilder;

class FizzBuzzOneToThreeBuilder
{
    private WebsiteBuilder $website1;

    public function __construct()
    {
        $this->website1 = new WebsiteBuilder();
    }
    public function fizzBuzzOneToThree(): array
    {
        return [
            $this->website1->h3Tags("FizzBuzz from one to three"),
            (new FizzBuzzOld(1, 3, new OutputWithColor()))->run2(),
        ];
    }
}
