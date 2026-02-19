<?php

namespace Routing\WebPages;

use Website\kitchen\Casserole;
use Website\kitchen\CasseroleDish;
use Website\kitchen\Chef;
use Website\kitchen\KitchenBuilder;
use Website\kitchen\Pot;
use Website\kitchen\Spaghetti;
use Website\kitchen\Stove;
use Website\WebPage\AbstractWebPage;
use Website\WebsiteBuilder;

class KitchenWebPage extends AbstractWebPage
{

    public function getContent(): string
    {
        $casserole = new Casserole();
        $casseroleDish = new CasseroleDish();
        $spaghetti = new Spaghetti();
        $pot = new Pot();
        $stove = new Stove();
        $chef = new Chef($stove, $pot, $spaghetti, $casserole, $casseroleDish);

        $websiteBuilder = new WebsiteBuilder();

        $kitchenBuilder = new KitchenBuilder($websiteBuilder, $chef, $stove, $pot, $spaghetti, $casserole, $casseroleDish);

        $stringArray = $kitchenBuilder->createKitchen();
        $string = implode(PHP_EOL, $stringArray);

        return $string;

        //return "KitchenWebPage";
    }
}
