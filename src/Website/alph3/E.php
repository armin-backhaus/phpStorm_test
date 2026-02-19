<?php

namespace Website\alph3;

class E
{
    private F $f;
    public function __construct(F $f)
    {
        $this->f = $f;
    }
    public function ee()
    {
        return "Magie" . $this->f->ff();
    }
}