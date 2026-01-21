<?php

namespace Website\blocks;

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