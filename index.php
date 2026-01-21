<?php

require_once 'vendor/autoload.php';

require_once './src/wow/const.php';

use FizzBuzz\FizzBuzzOld;
use Output\OutputWithColor;
use Website\blocks\A;
use Website\blocks\B;
use Website\blocks\C;
use Website\blocks\CharacterForm;
use Website\blocks\D;
use Website\blocks\E;
use Website\blocks\F;
use Website\blocks\FizzBuzzOneToThreeBuilder;
use Website\blocks\BattleBuilder;
use Website\blocks\Database;
use Website\blocks\Form;
use Website\blocks\G;
use Website\blocks\GreetingBuilder;
use Website\blocks\H;
use Website\blocks\I;
use Website\blocks\J;
use Website\blocks\K;
use Website\blocks\L;
use Website\blocks\M;
use Website\blocks\N;
use Website\blocks\O;
use Website\blocks\P;
use Website\blocks\Q;
use Website\blocks\R;
use Website\blocks\S;
use Website\blocks\T;
use Website\blocks\U;
use Website\blocks\V;
use Website\blocks\W;
use Website\blocks\WowBuilder;
use Website\blocks\X;
use Website\blocks\Y;
use Website\blocks\Z;
use Website\WebsiteBuilder;
use wow\Battle\Battle;
use wow\Breed\DarkIronDwarf;
use wow\Breed\DungeonMaster;
use wow\Breed\Elf;
use wow\Breed\Forsaken;
use wow\Breed\Human;
use wow\Breed\Ork;
use wow\Weapon\Sword;

$myWebsite = new WebsiteBuilder();
$database = new Database();
$battleBuilder = new BattleBuilder();
$fizzBuzzOneToThreeBuilder = new FizzBuzzOneToThreeBuilder();
$form = new Form($database); // this is Dependency Injection....strong!
$greetingBuilder = new GreetingBuilder();
$wowBuilder = new WowBuilder();
$z = new Z();
$y = new Y($z);
$x = new X($y);
$w = new W($x);
$v = new V($w);
$u = new U($v);
$t = new T($u);
$s = new S($t);
$r = new R($s);
$q =new Q($r);
$p = new P($q);
$o = new O($p);
$n = new N($o);
$m = new M($n);
$l = new L($m);
$k = new K($l);
$j = new J($k);
$i = new I($j);
$h = new H($i);
$g = new G($h);
$f = new F($g);
$e = new E($f);
$d = new D($e);
$c = new C($d);
$b = new B($c);
$a = new A($b);
$characterForm = new CharacterForm($myWebsite, $a);

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
