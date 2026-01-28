<?php

namespace Website\blocks\kitchen;

class CasseroleDish
{

    private $content;

    public function fillContent($content)
    {
        $this->content = $content;

        return "Content filled into CasseroleDish";
    }

    public function takeContent()
    {
        //return $this->content;

        return "Content taken out of CasseroleDish";
    }
}