<?php

require_once 'vendor/autoload.php';

require_once './src/wow/const.php';

use Website\blocks\alph1\A;
use Website\blocks\alph1\Alph1Builder;
use Website\blocks\alph1\B;
use Website\blocks\alph1\C;
use Website\blocks\alph1\D;
use Website\blocks\alph1\E;
use Website\blocks\alph1\F;
use Website\blocks\alph1\G;
use Website\blocks\alph1\H;
use Website\blocks\alph1\I;
use Website\blocks\alph1\J;
use Website\blocks\alph1\K;
use Website\blocks\alph1\L;
use Website\blocks\alph1\M;
use Website\blocks\alph1\N;
use Website\blocks\alph1\O;
use Website\blocks\alph1\P;
use Website\blocks\alph1\Q;
use Website\blocks\alph1\R;
use Website\blocks\alph1\S;
use Website\blocks\alph1\T;
use Website\blocks\alph1\U;
use Website\blocks\alph1\V;
use Website\blocks\alph1\W;
use Website\blocks\alph1\X;
use Website\blocks\alph1\Y;
use Website\blocks\alph1\Z;
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

echo $grossDoelln->startEvent();


echo $chef->makeSpaghetti();
echo $chef->makeCasserole();

$builder1 = new Alph1Builder();
$a1 = $builder1->build();
$builder2 = new Alph2Builder();
$a2 = $builder2->build();
$builder3 = new Alph3Builder();
$a3 = $builder3->build();
$characterForm = new CharacterForm($myWebsite, $a3);
$raceBuilder = new RaceBuilder($websiteBuilder, $raceControl, $grossDoelln, $honda, $yamaha, $racerA, $racerB);

//$formBlock = include './src/Website/blocks/Form.php';
$formBlock = $form->createInputForm();
//$fizzBuzzBlock = include './src/Website/blocks/FizzBuzzOneToThreeBuilder.php';
$fizzBuzzBlock = $fizzBuzzOneToThreeBuilder->fizzBuzzOneToThree();
//$wowBlock = include './src/Website/blocks/WowBuilder.php';
$wowBlock = $wowBuilder->headline();
//$battleBlock = include './src/Website/blocks/BattleBuilder.php';
$battleBlock = $battleBuilder->battleTwoGroups();
//$greetingBlock = include './src/Website/blocks/GreetingBuilder.php';
$greetingBlock = $greetingBuilder->speak();
$characterBlock = $characterForm->createCharacterForm();
$raceBlock = $raceBuilder->createRace();

//$dbBlock = include './src/Website/blocks/Database.php';
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
];

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

//include_once "indexOld.php";
