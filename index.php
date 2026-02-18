<?php

require_once 'vendor/autoload.php';

require_once './src/wow/const.php';

use Routing\RouterBuilder;
use Website\blocks\alph1\Alph1Builder;
use Website\blocks\alph2\Alph2Builder;
use Website\blocks\alph3\Alph3Builder;
use Website\blocks\CharacterForm;
use Website\blocks\Database;
use Website\blocks\Form;
use Website\blocks\GreetingBuilder;
use Website\WebsiteBuilder;

$myWebsite = new WebsiteBuilder();
$database = new Database();
$form = new Form($database); // this is Dependency Injection....strong!
$greetingBuilder = new GreetingBuilder();

$websiteBuilder = new WebsiteBuilder();

$builder1 = new Alph1Builder();
$a1 = $builder1->build();
$builder2 = new Alph2Builder();
$a2 = $builder2->build();
$builder3 = new Alph3Builder();
$a3 = $builder3->build();
$characterForm = new CharacterForm($myWebsite, $a3);

$formBlock = $form->createInputForm();
$greetingBlock = $greetingBuilder->speak();
$characterBlock = $characterForm->createCharacterForm();

$router = RouterBuilder::create();
$webPage = $router->getWebPageForURL();



$dbBlock = $database->testDb();

$allBlocks = [
    ... $formBlock,
    ... $characterBlock,
    ... $greetingBlock,
    ... $dbBlock,
];


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
        //... $allBlocks,
    )
);

echo $output . PHP_EOL . PHP_EOL;
