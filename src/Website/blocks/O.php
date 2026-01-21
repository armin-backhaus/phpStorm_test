<?php

namespace Website\blocks;

class O
{
    public P $p;

    public function __construct(P $p)
    {
        $this->p = $p;
    }
    public function oo()
    {
        return "Olo" . $this->p->pp();
    }
}