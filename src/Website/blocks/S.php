<?php

namespace Website\blocks;

class S
{
    public T $t;

    public function __construct(T $t)
    {
        $this->t = $t;
    }
    public function ss()
    {
        return "Ols" . $this->t->tt();
    }
}