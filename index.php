<?php

require_once 'vendor/autoload.php';

require_once './src/wow/const.php';

use FizzBuzz\FizzBuzzOld;
use Output\OutputWithColor;
use Website\Website;
use wow\Battle\Battle;
use wow\Breed\DarkIronDwarf;
use wow\Breed\DungeonMaster;
use wow\Breed\Elf;
use wow\Breed\Forsaken;
use wow\Breed\Human;
use wow\Breed\Ork;
use wow\Weapon\Sword;


$myWebsite = new Website();

$fizzBuzzBlock = include './src/Website/blocks/fizzBuzzBlock.php';
$wowBlock = include './src/Website/blocks/wowBlock.php';
$battleBlock = include './src/Website/blocks/battleBlock.php';
$greetingBlock = include './src/Website/blocks/greetingBlock.php';
$dbBlock = include './src/Website/blocks/dbBlock.php';

$allBlocks = [
    ... $fizzBuzzBlock,
    ... $wowBlock,
    ... $battleBlock,
    ... $greetingBlock,
    ... $dbBlock,
];


echo $myWebsite->docType();

$output = $myWebsite->htmlTags(
    $myWebsite->headTags(
        $myWebsite->titleTags("even better title")
    ),
    $myWebsite->bodyTags(
        $myWebsite->h1Tags("Hello Website"),
        $myWebsite->hrTag(),
        ... $allBlocks,
    )
);

echo $output . PHP_EOL . PHP_EOL;

include_once "indexOld.php";
