<?php

namespace Website\alph3;

class F
{
    public G $g;
    public function __construct(G $g)
    {
        $this->g = $g;
    }
    public function ff()
    {
        return "Magif" . $this->g->gg();
    }
}