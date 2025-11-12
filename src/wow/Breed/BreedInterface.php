<?php

namespace wow\Breed;

interface BreedInterface
{
    public function getName(): string;

    public function sayHi(): string;

    public function sayMyBreed(): string;
}