<?php

namespace Website\blocks;

class I
{
    public J $j;
    public function __construct(J $j)
    {
        $this->j = $j;
    }
    public function ii()
    {
        return "Oli" . $this->j->ii();
    }
}