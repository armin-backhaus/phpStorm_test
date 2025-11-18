<?php

namespace wow\Breed;

class Ork extends AbstractBreed
{
    public function __construct(string $name, int $health)
    {
        parent::__construct($name, $health);

        $this->health = MAX_HEALTH_ORK;

    }
}
