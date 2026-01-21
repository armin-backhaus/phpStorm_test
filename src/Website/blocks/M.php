<?php

namespace Website\blocks;

class M
{
    public N $n;

    public function __construct(N $n)
    {
        $this->n = $n;
    }
    public function mm()
    {
        return "Olm" . $this->n->nn();
    }
}