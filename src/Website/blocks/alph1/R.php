<?php

namespace Website\blocks\alph1;

class R
{

    public S $s;

    public function __construct(S $s)
    {
        $this->s = $s;
    }
    public function rr()
    {
        return "Olr" . $this->s->ss();
    }
}