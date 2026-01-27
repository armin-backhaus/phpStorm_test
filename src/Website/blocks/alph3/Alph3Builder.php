<?php

namespace Website\blocks\alph3;

class Alph3Builder
{
    public function build(): A
    {
        $y = new Y();
        $x = new X($y);
        $v = new V($x);
        $u = new U($v);
        $r = new R($u);
        $q = new Q($r);
        $o = new O($q);
        $n = new N($o);
        $k = new K($n);
        $j = new J($k);
        $g = new G($j);
        $f = new F($g);
        $c = new C($f);
        $b = new B($c);
        $a = new A($b);

        return $a;
    }
}
