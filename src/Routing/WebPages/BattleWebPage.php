<?php

namespace Routing\WebPages;

use Website\blocks\BattleBuilder;
use Website\WebPage\AbstractWebPage;
use Website\WebsiteBuilder;


class BattleWebPage extends AbstractWebPage
{

    public function getContent(): string
    {
        $websiteBuilder = new WebsiteBuilder();
        $battleBuilder = new BattleBuilder();
        $battleBlock = $battleBuilder->battleTwoGroups();

        return implode(PHP_EOL, $battleBlock);

    }
}
