<?php

namespace Website\blocks;

class B
{
    public C $c;
    public function __construct(C $c)
    {
        $this->c = $c;
    }
    public function bb()
    {
        return "Olb" . $this->c->cc();
    }
}
