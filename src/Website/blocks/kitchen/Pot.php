<?php

namespace Website\blocks\kitchen;

class Pot
{
    private $content;

    public function fillContent($content)
    {
        $this->content = $content;

        return "Content filled into Pot";
    }

    public function takeContent()
    {
        //return $this->content;

        return "Content taken out of Pot";
    }
}
