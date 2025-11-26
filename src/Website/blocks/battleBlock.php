<?php


use Website\Website;
use wow\Battle\Battle;
use wow\Breed\DarkIronDwarf;
use wow\Breed\DungeonMaster;
use wow\Breed\Elf;
use wow\Breed\Forsaken;
use wow\Breed\Human;
use wow\Breed\Ork;
use wow\Weapon\Sword;

$sword = new Sword();
$dub = new DungeonMaster("Dub", 0, 0, $sword);
$tyrande = new Elf("Tyrande", 0, 0, $sword,);
$caledra = new Elf("Caledra", 0, 0, $sword);
$anduin = new Human("Anduin", 0, 0, $sword);
$dagran = new DarkIronDwarf("Dagran", 0, 0, $sword);
$thrall = new Ork("Thrall", 0, 0, $sword);
$lostWeeper = new Forsaken("Lostweeper", 0, 0, $sword);
$group = new wow\Group\Group();
$group->addMember($tyrande, $thrall);

//$caledra->getWeapon()->useOn($thrall);
//$caledra->getWeapon()->useOn($thrall);


$myWebsite = new Website();

return [
    $myWebsite->h3Tags("Battle"),
    $myWebsite->pTags(
        (new Battle())->battleTwoGroups(
            [$dub, $thrall, $dagran],
            [$caledra, $anduin, $lostWeeper]
        )
    ),
    $myWebsite->pTags(
        $tyrande->sayGreeting("Hello"),
        $tyrande->sayMyBreed(),
    ),
];


