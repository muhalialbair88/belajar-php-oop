<?php

trait A
{
    function doA(): void
    {
        echo "a", PHP_EOL;
    }
    function doB(): void
    {
        echo "b", PHP_EOL;
    }
}

trait B
{
    function doA(): void
    {
        echo "A", PHP_EOL;
    }
    function doB(): void
    {
        echo "B", PHP_EOL;
    }
}

//contoh trait conflict karna function ada yang sama di kedua traitnya
class Sample
{
    // use A, B {
    // }
    //solusinya jika function pada trait sama(lebih baik jgn sama)
    use A, B {
        A::doA insteadof B;
        B::doB insteadof A;
    }
}

$sample = new Sample();
//jika dipanggil error
$sample->doA();
$sample->doB();
