<?php

namespace wow;

class DungenMaster
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayYeah(): string
    {
        return "Yeah, my name is $this->name! ";
    }

    public function sayMyBreed(): string
    {
        return "I'm the " .  basename(self::class) . "! ";
    }
}
