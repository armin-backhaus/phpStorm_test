<?php

namespace wow\Battle;

class Battle
{
    public function battleTwoGroups(array $group1, array $group2)
    {
        $groupCount1 = count($group1);
        $groupCount2 = count($group2);
        if ($groupCount1 == $groupCount2) {
            return "It's a draw!";
        } else if ($groupCount1 > $groupCount2) {
            return "Group1 1 wins!";
        } else {
            return "Group1 2 wins!";
        }
    }
}
