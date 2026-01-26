<?php

namespace Website\blocks\alph1;

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
