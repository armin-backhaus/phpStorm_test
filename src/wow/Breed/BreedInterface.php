<?php

namespace wow\Breed;

interface BreedInterface
{
    public function getName(): string;

    public function sayGreeting(string $greeting): string;

    public function sayMyBreed(): string;

    public function getHealth(): int;

    public function getCourage(): int;
}
