<?php

namespace Website\blocks\kitchen;

class Chef
{
    private Stove $stove;
    private Pot $pot;
    private Spaghetti $spaghetti;

    public function __construct(Stove $stove, Pot $pot, Spaghetti $spaghetti)
    {
        $this->stove = $stove;
        $this->pot = $pot;
        $this->spaghetti = $spaghetti;
    }

    public function makeSpaghetti()
    {
        $result = $this->stove->on();

        $result = $result . $this->stove->putSomethingOnHeat($this->pot);

        $result = $result . $this->pot->fillContent($this->spaghetti);

        $result = $result . $this->spaghetti->cookForMinutes(60);

        //$result = $result . $this->stove->off();
        $result .= $this->stove->off();

        $result = $result . $this->pot->takeContent();

        $result = $result . $this->spaghetti->isReady();

        return $result;
    }
}
