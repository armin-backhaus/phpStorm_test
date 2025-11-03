<?php

namespace wow\Breed;

class Forsaken
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function saySsh(): string
    {
        return "Ssh, my name is $this->name! ";
    }

    public function sayMyBreed(): string
    {
        return "I'm an " .  basename(self::class) . "! ";
    }
}
