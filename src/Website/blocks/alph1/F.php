<?php

namespace Website\blocks\alph1;

class F
{
    public G $g;
    public function __construct(G $g)
    {
        $this->g = $g;
    }
    public function ff()
    {
        return "Olf" . $this->g->gg();
    }
}