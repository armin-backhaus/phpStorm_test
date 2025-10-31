<?php

require_once 'vendor/autoload.php';

use FizzBuzz\FizzBuzzOld;
use Output\OutputWithColor;
use Website\Website;
use wow\Elf;
use wow\Ork;
use wow\Human;
use wow\DarkIronDwarf;
use wow\Forsaken;


$myWebsite = new Website();
$tyrande = new Elf("Tyrande");
$caledra = new Elf("Caledra");
$anduin = new Human("Anduin");
$dagran = new DarkIronDwarf("Dagran");
$thrall = new Ork("Thrall");
$lostWeeper = new Forsaken("Lostweeper");

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
            $tyrande->sayHello(),
            $tyrande->sayMyBreed(),
        ),
        $myWebsite->pTags(
            $caledra->sayHello(),
            $caledra->sayMyBreed(),
        ),

        $myWebsite->pTags(
            $thrall->sayHi(),
            $thrall->sayMyBreed(),
        ),

        $myWebsite->pTags(
            $anduin->sayYo(),
            $anduin->sayMyBreed(),
        ),

        $myWebsite->pTags(
            $dagran->sayGrr(),
            $dagran->sayMyBreed(),
        ),

        $myWebsite->pTags(
            $lostWeeper->saySsh(),
            $lostWeeper->sayMyBreed(),
        ),

        $myWebsite->hrTag(),
        $myWebsite->hrTag(),
    )
);

echo $output . PHP_EOL . PHP_EOL;

include_once "indexOld.php";
