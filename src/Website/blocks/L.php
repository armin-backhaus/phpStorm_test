<?php

namespace Website\blocks;

class L
{
    public M $m;

    public function __construct(M $m)
    {
        $this->m = $m;
    }
    public function ll()
    {
        return "Oll" . $this->m->mm();
    }
}