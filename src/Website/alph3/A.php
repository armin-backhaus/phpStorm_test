<?php

namespace Website\alph3;

class A
{
    public B $b;
    public function __construct(B $b)
    {
        $this->b = $b;
    }
    public function aa()
    {
        return "Magia" . $this->b->bb();
    }
}