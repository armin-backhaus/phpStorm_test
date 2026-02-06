<?php

namespace Routing\WebPages;

use Website\blocks\kitchen\Casserole;
use Website\blocks\kitchen\CasseroleDish;
use Website\blocks\kitchen\Chef;
use Website\blocks\kitchen\KitchenBuilder;
use Website\blocks\kitchen\Pot;
use Website\blocks\kitchen\Spaghetti;
use Website\blocks\kitchen\Stove;
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
