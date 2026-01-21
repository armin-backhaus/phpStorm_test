<?php

namespace Website\blocks;

class T
{
    public U $u;

    public function __construct(U $u)
    {
        $this->u = $u;
    }
    public function tt()
    {
        return "Olt" . $this->u->uu();
    }
}
