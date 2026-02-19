<?php

namespace Website\alph1;

class Q
{
    public R $r;

    public function __construct(R $r)
    {
        $this->r = $r;
    }
    public function qq()
    {
        return "Olq" . $this->r->rr();
    }
}