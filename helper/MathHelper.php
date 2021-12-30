<?php

namespace Helper;

class MathHelper
{
    //kalau pakai static tidak bisa menambahkan properti ke object tapi melalui class
    //properti static
    static public string $name = "MathHelper";

    //function static
    static public function sum(int ...$numbers): int
    {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }
}
