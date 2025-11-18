<?php

namespace wow\Breed;

class Human extends AbstractBreed
{
    public function __construct($name, $health)
    {
        parent:: __construct($name, $health);

        $this->health = MAX_HEALTH_HUMAN;
        $this->courage = COURAGE_HUMAN;
    }
}
