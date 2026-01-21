<?php

namespace Website\blocks;

class Y
{
    public Z $z;

    public function __construct(Z $z)
    {
        $this->z = $z;
    }

    public function yy()
    {
        return "Oly" . $this->z->zz();
    }
}