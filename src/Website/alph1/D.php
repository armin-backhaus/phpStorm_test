<?php

namespace Website\alph1;

class D
{
    public E $e;

    public function __construct(E $e)
    {
        $this->e = $e;
    }
    public function dd()
    {
        return "Old" . $this->e->ee();
    }
}
