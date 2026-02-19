<?php

namespace Routing\WebPages;

use Website\WebPage\AbstractWebPage;
use Website\WebsiteBuilder;
use Website\WowBuilder;

class WowWebPage extends AbstractWebPage
{

    public function getContent(): string
    {
        $websiteBuilder = new WebsiteBuilder();
        $wowBuilder = new WowBuilder();
        $wowBlock = $wowBuilder->headline();

        return implode(PHP_EOL, $wowBlock);
    }
}
