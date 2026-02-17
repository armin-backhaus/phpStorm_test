<?php

namespace Routing\WebPages;

use Website\blocks\BattleBuilder;
use Website\blocks\FizzBuzzOneToThreeBuilder;
use Website\WebPage\AbstractWebPage;
use Website\WebsiteBuilder;


class FizzBuzzWebPage extends AbstractWebPage
{

    public function getContent(): string
    {
        $websiteBuilder = new WebsiteBuilder();
        $fizzBuzzOneToThreeBuilder = new FizzBuzzOneToThreeBuilder();
        $fizzBuzzBlock = $fizzBuzzOneToThreeBuilder->fizzBuzzOneToThree();

        return implode(PHP_EOL, $fizzBuzzBlock);

    }
}
