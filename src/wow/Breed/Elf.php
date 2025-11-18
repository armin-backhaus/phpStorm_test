<?php

namespace wow\Breed;

class Elf extends AbstractBreed
{
    public function __construct(string $name, int $health)
    {
        parent::__construct($name, $health);

        $this->health = MAX_HEALTH_ELF;
    }
}
