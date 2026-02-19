<?php

namespace Website\alph1;

class E
{
    public F $f;

    public function __construct(F $f)
    {
        $this->f = $f;
    }
    public function ee()
    {
        return "Ole" . $this->f->ff();
    }
}
