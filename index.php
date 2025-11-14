<?php

require_once 'vendor/autoload.php';

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

$myWebsite = new Website();
$tyrande = new Elf("Tyrande");
$caledra = new Elf("Caledra");
$anduin = new Human("Anduin");
$dagran = new DarkIronDwarf("Dagran");
$thrall = new Ork("Thrall");
$lostWeeper = new Forsaken("Lostweeper");
$dub = new DungeonMaster("Dub");

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
            $tyrande->sayHi(),
            $tyrande->sayMyBreed(),
        ),
        $myWebsite->pTags(
            $caledra->sayHi(),
            $caledra->sayMyBreed(),
        ),

        $myWebsite->pTags(
            $thrall->sayHi(),
            $thrall->sayMyBreed(),
        ),

        $myWebsite->pTags(
            $anduin->sayHi(),
            $anduin->sayMyBreed(),
        ),

        $myWebsite->pTags(
            $dagran->sayHi(),
            $dagran->sayMyBreed(),
        ),

        $myWebsite->pTags(
            $lostWeeper->sayHi(),
            $lostWeeper->sayMyBreed(),
        ),

        $myWebsite->pTags(
            $dub->sayGreeting(),
            $dub->sayMyBreed(),
        ),

        $myWebsite->h3Tags("Battle"),
        $myWebsite->pTags(
            (new Battle())->battleTwoGroups(
                [$dub, $thrall, $dagran],
                [$caledra, $anduin, $lostWeeper]
            )
        ),

        $myWebsite->hrTag(),
        $myWebsite->hrTag(),
    )
);

echo $output . PHP_EOL . PHP_EOL;

include_once "indexOld.php";
