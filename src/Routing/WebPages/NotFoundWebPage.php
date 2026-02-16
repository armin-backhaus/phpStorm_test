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

class NotFoundWebPage extends AbstractWebPage
{

    public function getContent(): string
    {
        return "Not Found";
    }
}
