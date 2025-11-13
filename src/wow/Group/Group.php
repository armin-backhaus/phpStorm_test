<?php

namespace wow\Group;

use wow\Breed\BreedInterface;

class Group
{
    /**
     * @var BreedInterface[] $members
     */
    private array $members = [];

    public function addMember(BreedInterface ...$members): self
    {
        foreach ($members as $member) {
            if (!in_array($member, $this->members, true)) {
                $this->members[] = $member;
            }
        }

        return $this;
    }

    public function getMembers(): array
    {
        return $this->members;
    }

    function findObjectByName(string $nameToSearchFor)
    {
        $memberArray = array('Dub', 'Hannes', 'Armin');

        foreach ($this->members as $currentMember) {
            if ($currentMember->getName() == $nameToSearchFor) {

                return $currentMember;
            }
        }

        return false;
    }

    public function getMember(): object
    {
        //$found_key = array_search('Dub', $this->members ($, ''));

        //array_find(array $array, callable $callback): mixed
    }
}
