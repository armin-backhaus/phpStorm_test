<?php

namespace Website\blocks;

use Website\WebsiteBuilder;

class A
{
    public B $b;
    public function __construct(B $b)
    {
        $this->b = $b;
    }
    public function aa()
    {
        return "Ola" . $this->b->bb();
    }
}
