<?php

namespace Website\blocks\alph2;

class A extends B
{
    public function aa()
    {
        return "Hera" . $this->bb();
    }
}