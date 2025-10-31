<?php

require_once 'vendor/autoload.php';

use FizzBuzz\FizzBuzzOld;
use Output\OutputWithColor;
use Website\Website;



$myWebsite = new Website();

echo $myWebsite->docType();

$output = $myWebsite->htmlTags(
    $myWebsite->headTags(
        $myWebsite->titleTags("even better title")
    ),
    $myWebsite->bodyTags(
        $myWebsite->h1Tags("Hello Website"),
        $myWebsite->hrTag(),
        $myWebsite->contentParagraph("FizzBuzz from one to three"),
        (new FizzBuzzOld(1, 3, new OutputWithColor()))->run2(),
        $myWebsite->contentParagraph("something different"),
        $myWebsite->hrTag(),
        $myWebsite->hrTag(),
    )
);

echo $output . PHP_EOL . PHP_EOL;

include_once "indexOld.php";
