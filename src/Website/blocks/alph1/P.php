<?php

namespace Website\blocks\alph1;

class P
{
    public Q $q;

    public function __construct(Q $q)
    {
        $this->q = $q;
    }
    public function pp()
    {
        return "Olp" . $this->q->qq();
    }
}