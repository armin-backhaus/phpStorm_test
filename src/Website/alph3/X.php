<?php

namespace Website\alph3;

class X
{
    public Y $y;
    public function __construct($y)
    {
        $this->y = $y;
    }
    public function xx()
    {
        return "Magix" . $this->y->yy();
    }
}