<?php

namespace Website\blocks;

class W
{

    public X $x;

    public function __construct(X $x)
    {
        $this->x = $x;
    }
    public function ww()
    {
        return "Olw" . $this->x->xx();
    }
}