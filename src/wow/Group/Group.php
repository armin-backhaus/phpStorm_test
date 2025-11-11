<?php

namespace wow\Group;

class Group
{
    private array $members = [];

    public function addMember(object ... $members): self
    {
        //foreach ($members as $member) {
            //$this->members[] = $member;
        //}
        $this->members = array_merge($this->members, $members);

        return $this;
    }

    public function getMembers(): array
    {
        return $this->members;
    }


}
