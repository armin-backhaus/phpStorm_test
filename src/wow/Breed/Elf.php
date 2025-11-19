<?php

namespace wow\Breed;

class Elf extends AbstractBreed
{
    public function __construct(string $name, int $health)
    {
        parent::__construct($name, $health);

        $this->health = MAX_HEALTH_ELF;
        $this->courage = COURAGE_ELF;
        $this->strength = STRENGTH_ELF;
        $this->intelligence = INTELLIGENCE_ELF;
        $this->weapon = WEAPON_ELF;
    }
}
