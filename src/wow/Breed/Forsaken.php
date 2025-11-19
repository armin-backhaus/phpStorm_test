<?php

namespace wow\Breed;

class Forsaken extends AbstractBreed
{
    public function __construct(string $name, int $health)
    {
        parent::__construct($name, $health);

        $this->health = MAX_HEALTH_FORSAKEN;
        $this->courage = COURAGE_FORSAKEN;
        $this->strength = STRENGTH_FORSAKEN;
        $this->intelligence = INTELLIGENCE_FORSAKEN;
    }
}
