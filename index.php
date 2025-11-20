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
$sword = new Sword(WEAPON_POWER);
$tyrande = new Elf("Tyrande", 0, $sword);
$caledra = new Elf("Caledra", 0, $sword);
$anduin = new Human("Anduin", 0, $sword);
$dagran = new DarkIronDwarf("Dagran", 0, $sword);
$thrall = new Ork("Thrall", 0, $sword);
$lostWeeper = new Forsaken("Lostweeper", 0, $sword);
$dub = new DungeonMaster("Dub", 0, $sword);
$group = new wow\Group\Group();
$group->addMember($tyrande, $dub, $thrall);

echo $caledra->getHealth();
$dub->getWeapon()->useOn($caledra);
echo $caledra->getHealth();


echo $myWebsite->docType();

$output = $myWebsite->htmlTags(
    $myWebsite->headTags(
        $myWebsite->titleTags("even better title")
    ),
    $myWebsite->bodyTags(
        $myWebsite->h1Tags("Hello Website"),
        $myWebsite->hrTag(),
        $myWebsite->h3Tags("FizzBuzz from one to three"),
        (new FizzBuzzOld(1, 3, new OutputWithColor()))->run2(),
        $myWebsite->h3Tags("World of Warcraft"),
        $myWebsite->pTags(
            $tyrande->sayGreeting("Hello"),
            $tyrande->sayMyBreed(),
        ),
        $myWebsite->pTags(
            $caledra->sayGreeting("Hello"),
            $caledra->sayMyBreed(),
        ),

        $myWebsite->pTags(
            $thrall->sayGreeting("Hi"),
            $thrall->sayMyBreed(),
        ),

        $myWebsite->pTags(
            $anduin->sayGreeting("Yo"),
            $anduin->sayMyBreed(),
        ),

        $myWebsite->pTags(
            $dagran->sayGreeting("Grr"),
            $dagran->sayMyBreed(),
        ),

        $myWebsite->pTags(
            $lostWeeper->sayGreeting("Ssh"),
            $lostWeeper->sayMyBreed(),
        ),

        $myWebsite->pTags(
            $dub->sayGreeting("Yeah"),
            $dub->sayMyBreed(),
        ),

        $myWebsite->h3Tags("Battle"),
        $myWebsite->pTags(
            (new Battle())->battleTwoGroups(
                [$dub, $thrall, $dagran],
                [$caledra, $anduin, $lostWeeper]
            )
        ),

        $myWebsite->pTags(
            $group->everybodyGreets(),
        ),

        $myWebsite->hrTag(),
        $myWebsite->hrTag(),
    )
);

echo $output . PHP_EOL . PHP_EOL;

include_once "indexOld.php";
