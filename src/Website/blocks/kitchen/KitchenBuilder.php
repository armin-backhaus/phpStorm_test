<?php

namespace Website\blocks\kitchen;

use Website\WebsiteBuilder;

class KitchenBuilder
{
    private WebsiteBuilder $websiteBuilder;
    private Chef $chef;
    private Stove $stove;
    private Pot $pot;
    private Spaghetti $spaghetti;
    private Casserole $casserole;
    private CasseroleDish $casseroleDish;

    public function __construct(WebsiteBuilder $websiteBuilder, $chef, $stove, Pot $pot, Spaghetti $spaghetti, Casserole $casserole, CasseroleDish $casseroleDish)
    {
        $this->websiteBuilder = $websiteBuilder;
        $this->chef = $chef;
        $this->stove = $stove;
        $this->pot = $pot;
        $this->spaghetti = $spaghetti;
        $this->casserole = $casserole;
        $this->casseroleDish = $casseroleDish;
    }

    public function createKitchen()
    {
        ob_start();

        echo $this->websiteBuilder->h3Tags("Kitchen");

        echo $this->chef->makeSpaghetti();
        echo $this->chef->makeCasserole();

        $buffer = ob_get_clean();

        return [$buffer];

    }
}
