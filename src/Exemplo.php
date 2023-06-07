<?php

namespace Exemplo;

final class Exemplo
{
    public static function teste(string $email)
    {
        return "10";
    }
    public static function fatorial($a)
    {
        $calc = $a;
        while ($a > 1) {
            $a--;
            $calc *= $a;
        }
        return $calc;
    }
    public static function fibonacci($n)
    {
        $a = 1;
        $b = 1;
        while($n > 1){
            $c = $a + $b;
            $a = $b;
            $b = $c;
            $n--;
        }
        return $a;
    }
}
