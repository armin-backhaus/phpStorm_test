<?php

namespace Website\blocks\kitchen;

class Stove
{

    public function __destruct()
    {
        echo $this->off();
    }
    public function on()
    {
        return "Stove is on";
    }

    public function off()
    {
        return "Stove is off";
    }

    public function putSomethingOnHeat($pot)
    {
        return "Something is on Heat";
    }

    public function putSomethingIntoHeat($casseroleDish)
    {
        return "Something is In Heat";
    }
}
