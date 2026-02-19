<?php

namespace Website\alph1;

class C
{
    public D $d;
    public function __construct(D $d)
    {
        $this->d = $d;
    }
    public function cc()
    {
        return "Olc" . $this->d->dd();
    }
}
