<?php

namespace Website\blocks\kitchen;

class Stove
{
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
}