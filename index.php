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
$sword = new Sword();
$tyrande = new Elf("Tyrande", 0, 0, $sword,);
$caledra = new Elf("Caledra", 0, 0, $sword);
$anduin = new Human("Anduin", 0, 0, $sword);
$dagran = new DarkIronDwarf("Dagran", 0, 0, $sword);
$thrall = new Ork("Thrall", 0, 0, $sword);
$lostWeeper = new Forsaken("Lostweeper", 0, 0, $sword);
$dub = new DungeonMaster("Dub", 0, 0, $sword);
$group = new wow\Group\Group();
$group->addMember($tyrande, $dub, $thrall);


$fizzBuzzBlock = include './src/Website/blocks/fizzBuzzBlock.php';
$wowBlock = include './src/Website/blocks/wowBlock.php';

$allBlocks = [
    ... $fizzBuzzBlock,
    ... $wowBlock,
];

$caledra->getWeapon()->useOn($thrall);
$caledra->getWeapon()->useOn($thrall);


echo $myWebsite->docType();

$output = $myWebsite->htmlTags(
    $myWebsite->headTags(
        $myWebsite->titleTags("even better title")
    ),
    $myWebsite->bodyTags(
//        $myWebsite->h1Tags("Hello Website"),
//        $myWebsite->hrTag(),

        ... $allBlocks,
//
//        $myWebsite->pTags(
//            $tyrande->sayGreeting("Hello"),
//            $tyrande->sayMyBreed(),
//        ),
//        $myWebsite->pTags(
//            $caledra->sayGreeting("Hello"),
//            $caledra->sayMyBreed(),
//        ),
//
//        $myWebsite->pTags(
//            $thrall->sayGreeting("Hi"),
//            $thrall->sayMyBreed(),
//        ),
//
//        $myWebsite->pTags(
//            $anduin->sayGreeting("Yo"),
//            $anduin->sayMyBreed(),
//        ),
//
//        $myWebsite->pTags(
//            $dagran->sayGreeting("Grr"),
//            $dagran->sayMyBreed(),
//        ),
//
//        $myWebsite->pTags(
//            $lostWeeper->sayGreeting("Ssh"),
//            $lostWeeper->sayMyBreed(),
//        ),
//
//        $myWebsite->pTags(
//            $dub->sayGreeting("Yeah"),
//            $dub->sayMyBreed(),
//        ),
//

//
//        $myWebsite->pTags(
//            $group->everybodyGreets(),
//        ),
//
//        $myWebsite->hrTag(),
//        $myWebsite->hrTag(),
    )
);

echo $output . PHP_EOL . PHP_EOL;

include_once "indexOld.php";
