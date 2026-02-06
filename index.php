<?php

require_once 'vendor/autoload.php';

require_once './src/wow/const.php';

use Routing\RouterBuilder;
use Website\blocks\alph1\Alph1Builder;
use Website\blocks\alph2\Alph2Builder;
use Website\blocks\alph3\Alph3Builder;
use Website\blocks\BattleBuilder;
use Website\blocks\CharacterForm;
use Website\blocks\Database;
use Website\blocks\FizzBuzzOneToThreeBuilder;
use Website\blocks\Form;
use Website\blocks\GreetingBuilder;
use Website\blocks\kitchen\Casserole;
use Website\blocks\kitchen\CasseroleDish;
use Website\blocks\kitchen\Chef;
use Website\blocks\kitchen\KitchenBuilder;
use Website\blocks\kitchen\Pot;
use Website\blocks\kitchen\Spaghetti;
use Website\blocks\kitchen\Stove;
use Website\blocks\RaceBuilder;
use Website\blocks\raceTrack\GrossDoelln;
use Website\blocks\raceTrack\Honda;
use Website\blocks\raceTrack\RaceControl;
use Website\blocks\raceTrack\RacerA;
use Website\blocks\raceTrack\RacerB;
use Website\blocks\raceTrack\Yamaha;
use Website\blocks\WowBuilder;
use Website\WebsiteBuilder;

$myWebsite = new WebsiteBuilder();
$database = new Database();
$battleBuilder = new BattleBuilder();
$fizzBuzzOneToThreeBuilder = new FizzBuzzOneToThreeBuilder();
$form = new Form($database); // this is Dependency Injection....strong!
$greetingBuilder = new GreetingBuilder();
$wowBuilder = new WowBuilder();

$casserole = new Casserole();
$casseroleDish = new CasseroleDish();
$spaghetti = new Spaghetti();
$pot = new Pot();
$stove = new Stove();
$chef = new Chef($stove, $pot, $spaghetti, $casserole, $casseroleDish);

//$chef->makeCasserole();

$racerA = new RacerA();
$racerB = new RacerB();
$driverA = new RacerA();
$driverB = new RacerB();
$honda = new Honda($driverA, $driverB);
$yamaha = new Yamaha($driverA, $driverB);
$presenter = new RaceControl();
$grossDoelln = new GrossDoelln($presenter, $driverA, $driverB, $honda, $yamaha);
$track = new GrossDoelln($presenter, $driverA, $driverB, $honda, $yamaha);
$raceControl = new RaceControl();
$websiteBuilder = new WebsiteBuilder();


$builder1 = new Alph1Builder();
$a1 = $builder1->build();
$builder2 = new Alph2Builder();
$a2 = $builder2->build();
$builder3 = new Alph3Builder();
$a3 = $builder3->build();
$characterForm = new CharacterForm($myWebsite, $a3);
$raceBuilder = new RaceBuilder($websiteBuilder, $raceControl, $grossDoelln, $honda, $yamaha, $racerA, $racerB);
$kitchenBuilder = new KitchenBuilder($websiteBuilder, $chef, $stove, $pot, $spaghetti, $casserole, $casseroleDish);

$formBlock = $form->createInputForm();
$fizzBuzzBlock = $fizzBuzzOneToThreeBuilder->fizzBuzzOneToThree();
$wowBlock = $wowBuilder->headline();
$battleBlock = $battleBuilder->battleTwoGroups();
$greetingBlock = $greetingBuilder->speak();
$characterBlock = $characterForm->createCharacterForm();
$raceBlock = $raceBuilder->createRace();
$kitchenBlock = $kitchenBuilder->createKitchen();

$router = RouterBuilder::create();
$webPage = $router->getWebPageById("kitchen");

echo "XXX", $webPage->getContent();

$dbBlock = $database->testDb();

$allBlocks = [
    ... $fizzBuzzBlock,
    ... $formBlock,
    ... $characterBlock,
    ... $wowBlock,
    ... $battleBlock,
    ... $greetingBlock,
    ... $dbBlock,
    ... $raceBlock,
    ... $kitchenBlock,
];


$fullUrl = $_SERVER['REQUEST_URI'];
$contentId = basename($fullUrl);

echo $contentId . "<br>";
echo $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

echo $myWebsite->docType();

$output = $myWebsite->htmlTags(
    $myWebsite->headTags(
        $myWebsite->titleTags("even better title")
    ),
    $myWebsite->bodyTags(
        $myWebsite->h1Tags("Hello Website"),
        $myWebsite->hrTag(),
        $myWebsite->scriptSrcTags("src/scripts/main.js"),
        ... $allBlocks,
    )
);

echo $output . PHP_EOL . PHP_EOL;
