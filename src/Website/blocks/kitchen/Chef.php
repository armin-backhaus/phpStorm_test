<?php

namespace Website\blocks\kitchen;

class Chef
{
    private Stove $stove;
    private Pot $pot;
    private Spaghetti $spaghetti;
    private Casserole $casserole;
    private CasseroleDish $casseroleDish;


    public function __construct(Stove $stove, Pot $pot, Spaghetti $spaghetti, Casserole $casserole, CasseroleDish $casseroleDish)
    {
        $this->stove = $stove;
        $this->pot = $pot;
        $this->spaghetti = $spaghetti;
        $this->casserole = $casserole;
        $this->casseroleDish = $casseroleDish;
    }

    public function makeSpaghetti()
    {
        $result = $this->stove->on();

        $result = $result . $this->stove->putSomethingOnHeat($this->pot);

        $result = $result . $this->pot->fillContent($this->spaghetti);

        $result = $result . $this->spaghetti->cookForMinutes(999999);

        //$result = $result . $this->stove->off();
        $result .= $this->stove->off();

        $result = $result . $this->pot->takeContent();

        $result = $result . $this->spaghetti->isReady();

        return $result;
    }

    public function makeCasserole()
    {
        $result = $this->stove->on();

        $result = $result . $this->casseroleDish->fillContent($this->casserole);

        $result = $result . $this->stove->putSomethingIntoHeat($this->casseroleDish);

        $result = $result . $this->casserole->backeForHours(2);

        $result = $result . $this->casserole->isReady();

        return $result;
    }
}
