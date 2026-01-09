<?php

namespace Website\blocks;

use Website\Website;
use wow\Battle\Battle;
use wow\Breed\BreedInterface;
use wow\Breed\DarkIronDwarf;
use wow\Breed\DungeonMaster;
use wow\Breed\Elf;
use wow\Breed\Forsaken;
use wow\Breed\Human;
use wow\Breed\Ork;
use wow\Group\Group;
use wow\Weapon\Sword;
use wow\Weapon\WeaponInterface;

class BattleBuilder
{
    private WeaponInterface $sword;
    private BreedInterface $dub;
    private BreedInterface $tyrande;
    private BreedInterface $caledra;
    private BreedInterface $anduin;
    private BreedInterface $dagran;
    private BreedInterface $thrall;
    private BreedInterface $lostWeeper;
    private Group $group;
    private Website $myWebsite;

    public function __construct()
    {
        $this->sword = new Sword();
        $this->dub = new DungeonMaster("Dub", 0, 0, $this->sword);
        $this->tyrande = new Elf("Tyrande", 0, 0, $this->sword,);
        $this->caledra = new Elf("Caledra", 0, 0, $this->sword);
        $this->anduin = new Human("Anduin", 0, 0, $this->sword);
        $this->dagran = new DarkIronDwarf("Dagran", 0, 0, $this->sword);
        $this->thrall = new Ork("Thrall", 0, 0, $this->sword);
        $this->lostWeeper = new Forsaken("Lostweeper", 0, 0, $this->sword);
        $this->group = new Group();
        $this->group->addMember($this->tyrande, $this->thrall);

//$caledra->getWeapon()->useOn($thrall);
//$caledra->getWeapon()->useOn($thrall);



    }
    public function battleTwoGroups()
    {
        $this->myWebsite = new Website();

        return [
            $this->myWebsite->h3Tags("Battle"),
            $this->myWebsite->pTags(
                (new Battle())->battleTwoGroups(
                    [$this->dub, $this->thrall, $this->dagran],
                    [$this->caledra, $this->anduin, $this->lostWeeper]
                )
            ),
        ];

    }
    public function greeting()
    {
        $this->myWebsite->pTags(
            $this->tyrande->sayGreeting("Hello"),
            $this->tyrande->sayMyBreed(),
        );

    }
}
