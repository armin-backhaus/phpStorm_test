<?php

namespace Website\blocks;
use Website\Website;

class WowBuilder
{
    private $website2;

    public function __construct()
    {
        $this->website2 = new Website();
    }

    public function headline()
    {
        return [
            $this->website2->h3Tags("World of Warcraft")
        ];
    }
}
