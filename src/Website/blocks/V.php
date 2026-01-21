<?php

namespace Website\blocks;

class V
{
    public W $w;

    public function __construct(W $w)
    {
        $this->w = $w;
    }
    public function vv()
    {
        return "Olv" . $this->w->ww();
    }
}