<?php

require_once 'vendor/autoload.php';

require_once './src/wow/const.php';

use FizzBuzz\FizzBuzzOld;
use Output\OutputWithColor;
use Website\blocks\FizzBuzzOneToThreeBuilder;
use Website\blocks\BattleBuilder;
use Website\blocks\Database;
use Website\blocks\Form;
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
$database = new Database();
$battleBuilder = new BattleBuilder();
$fizzBuzzOneToThreeBuilder = new FizzBuzzOneToThreeBuilder();
$form = new Form();


//$formBlock = include './src/Website/blocks/Form.php';
$formBlock = $form->createInputForm();
//$fizzBuzzBlock = include './src/Website/blocks/FizzBuzzOneToThreeBuilder.php';
$fizzBuzzBlock = $fizzBuzzOneToThreeBuilder->fizzBuzzOneToThree();
$wowBlock = include './src/Website/blocks/wowBlock.php';
//$battleBlock = include './src/Website/blocks/BattleBuilder.php';
$battleBlock = $battleBuilder->battleTwoGroups();
$greetingBlock = include './src/Website/blocks/greetingBlock.php';
//$dbBlock = include './src/Website/blocks/Database.php';
$dbBlock = $database->testDb();

$allBlocks = [
    ... $fizzBuzzBlock,
    ... $formBlock,
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
