<?php

namespace Routing\WebPages;

use Website\GreetingBuilder;
use Website\WebPage\AbstractWebPage;
use Website\WebsiteBuilder;

class GreetingWebPage extends AbstractWebPage
{

    public function getContent(): string
    {
        $websiteBuilder = new WebsiteBuilder();
        $greetingBuilder = new GreetingBuilder();
        $greetingBlock = $greetingBuilder->speak();

        return implode(PHP_EOL, $greetingBlock);
    }
}
