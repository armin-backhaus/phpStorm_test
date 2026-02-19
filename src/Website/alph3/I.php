<?php

namespace Website\alph3;

class I
{
    private J $j;
    public function __construct(J $j)
    {
        $this->j = $j;
    }
    public function ii()
    {
        return "Magii" . $this->j->jj();
    }
}