<?php

namespace Website\blocks\alph1;

class X
{
    public Y $y;

    public function __construct(Y $y)
    {
        $this->y = $y;
    }
    public function xx()
    {
        return "Olx" . $this->y->yy();
    }
}