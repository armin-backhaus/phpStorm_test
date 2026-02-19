<?php

namespace Website\alph1;

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
