<?php

namespace Website\blocks;

class H
{
    public I $i;
    public function __construct(I $i)
    {
        $this->i= $i;
    }
    public function hh()
    {
        return "Olh" . $this->i->ii();
    }
}