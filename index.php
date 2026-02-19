<?php

require_once 'vendor/autoload.php';
require_once './src/wow/const.php';

use Routing\RouterBuilder;
use Website\WebsiteBuilder;

$router = RouterBuilder::create();
$websiteBuilder = new WebsiteBuilder($router);

echo $websiteBuilder->buildWebsite(
    $websiteBuilder->headTags(
        $websiteBuilder->titleTags("even better title")
    ),
    $websiteBuilder->bodyTags(
        $websiteBuilder->h1Tags("Hello Website"),
        $websiteBuilder->hrTag(),
        $websiteBuilder->menuArea(),
        $websiteBuilder->hrTag(),
        $websiteBuilder->pageContent(),
        $websiteBuilder->scriptSrcTags("src/scripts/main.js"),
        $websiteBuilder->hrTag(),
    )
);
