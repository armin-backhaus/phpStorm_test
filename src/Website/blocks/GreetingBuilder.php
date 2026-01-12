<?php

namespace Website\blocks;

use Website\Website;
use wow\Breed\BreedInterface;
use wow\Breed\DarkIronDwarf;
use wow\Breed\DungeonMaster;
use wow\Breed\Elf;
use wow\Breed\Forsaken;
use wow\Breed\Human;
use wow\Breed\Ork;
use wow\Group\GroupInterface;
use wow\Weapon\Sword;
use wow\Weapon\WeaponInterface;
use wow\Group\Group;

class GreetingBuilder
{
    private WeaponInterface $sword;
    private BreedInterface $dub;
    private BreedInterface $tyrande;
    private BreedInterface $caledra;
    private BreedInterface $anduin;
    private BreedInterface $dagran;
    private BreedInterface $thrall;
    private BreedInterface $lostWeeper;
    private GroupInterface $group;
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

        $this->myWebsite = new Website();
    }

    public function speach()
    {
        return [
            $this->myWebsite->pTags(
                $this->tyrande->sayGreeting("Hello"),
                $this->tyrande->sayMyBreed(),
            ),

            $this->myWebsite->pTags(
                $this->caledra->sayGreeting("Hello"),
                $this->caledra->sayMyBreed(),
            ),

            $this->myWebsite->pTags(
                $this->thrall->sayGreeting("Hi"),
                $this->thrall->sayMyBreed(),
            ),

            $this->myWebsite->pTags(
                $this->anduin->sayGreeting("Yo"),
                $this->anduin->sayMyBreed(),
            ),

            $this->myWebsite->pTags(
                $this->dagran->sayGreeting("Grr"),
                $this->dagran->sayMyBreed(),
            ),

            $this->myWebsite->pTags(
                $this->lostWeeper->sayGreeting("Ssh"),
                $this->lostWeeper->sayMyBreed(),
            ),

            $this->myWebsite->pTags(
                $this->dub->sayGreeting("Yeah"),
                $this->dub->sayMyBreed(),
            ),

            $this->myWebsite->pTags(
                $this->group->everybodyGreets(),
            ),
        ];
    }
}
