<?php

namespace Website\blocks;
use Website\WebsiteBuilder;

class WowBuilder
{
    private WebsiteBuilder $website2;

    public function __construct()
    {
        $this->website2 = new WebsiteBuilder();
    }

    public function headline(): array
    {
        return [
            $this->website2->h3Tags("World of Warcraft")
        ];
    }
}
