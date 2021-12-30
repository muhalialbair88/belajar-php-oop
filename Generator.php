<?php

// ini secara manual menggunakan iteratorarray
function getGenap(int $max): Iterator
{
    $array = [];
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }
    return new ArrayIterator($array);
}

foreach (getGenap(10) as $value) {
    echo "Genap : $value" . PHP_EOL;
}

// ini lebih praktik menggunakan Generator / keyword yield,
//tanpa mendeklarasikan $array terlebih dahulu,
//serta tanpa return
function getGanjil(int $max): Iterator
{
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 1) {
            yield $i;
        }
    }
}

foreach (getGanjil(10) as $value) {
    echo "Ganjil : $value" . PHP_EOL;
}
