<?php

namespace Website\alph3;

class B
{
    private C $c;
    public function __construct(C $c)
    {
        $this->c = $c;
    }
    public function bb()
    {
        return "Magib" . $this->c->cc();
    }
}