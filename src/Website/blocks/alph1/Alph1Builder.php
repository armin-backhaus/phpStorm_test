<?php

namespace Website\blocks\alph1;

class Alph1Builder
{
    public function build(): A
    {
        $z = new Z();
        $y = new Y($z);
        $x = new X($y);
        $w = new W($x);
        $v = new V($w);
        $u = new U($v);
        $t = new T($u);
        $s = new S($t);
        $r = new R($s);
        $q = new Q($r);
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
        $z->setA($a);


        return $a;
    }
}