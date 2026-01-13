<?php

namespace Website\blocks;
use Website\Website;

class WowBuilder
{
    private Website $website2;

    public function __construct()
    {
        $this->website2 = new Website();
    }

    public function headline(): array
    {
        return [
            $this->website2->h3Tags("World of Warcraft")
        ];
    }
}
