<?php

use FizzBuzz\FizzBuzzOld;
use Output\OutputWithColor;

$website1 = new \Website\Website();

return [
    $website1->h3Tags("FizzBuzz from one to three"),
    (new FizzBuzzOld(1, 3, new OutputWithColor()))->run2(),
];
