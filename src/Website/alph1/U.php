<?php

namespace Website\alph1;

class U
{
    public V $v;

    public function __construct(V $v)
    {
        $this->v = $v;
    }
    public function uu()
    {
        return "Olu" . $this->v->vv();
    }
}