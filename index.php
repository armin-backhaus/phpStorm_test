<?php

require_once 'vendor/autoload.php';
require_once './src/wow/const.php';

use Routing\RouterBuilder;
use Website\WebsiteBuilder;

$myWebsite = new WebsiteBuilder();
$websiteBuilder = new WebsiteBuilder();
$router = RouterBuilder::create();
$webPage = $router->getWebPageForURL();
$allBlocks = [];
$fullUrl = $_SERVER['REQUEST_URI'];
$contentId = basename($fullUrl);

echo $myWebsite->docType();

$output = $myWebsite->htmlTags(
    $myWebsite->headTags(
        $myWebsite->titleTags("even better title")
    ),
    $myWebsite->bodyTags(
        $myWebsite->h1Tags("Hello Website"),
        $myWebsite->hrTag(),
        $myWebsite->menuArea($router->getRoutes()),
        $myWebsite->hrTag(),
        $myWebsite->divTag($webPage->getContent()),
        $myWebsite->scriptSrcTags("src/scripts/main.js"),
        $myWebsite->hrTag(),
    )
);

echo $output . PHP_EOL . PHP_EOL;
