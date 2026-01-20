<?php

namespace Website\blocks;

use Website\WebsiteBuilder;
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

class AbstractBuilder
{
    protected WebsiteBuilder $myWebsite;
    protected WeaponInterface $sword;
    protected BreedInterface $dub;
    protected BreedInterface $tyrande;
    protected BreedInterface $caledra;
    protected BreedInterface $anduin;
    protected BreedInterface $dagran;
    protected BreedInterface $thrall;
    protected BreedInterface $lostWeeper;
    protected Group $group;

    public function __construct()
    {
        $this->myWebsite = new WebsiteBuilder();
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
    }
}
