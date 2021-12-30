<?php

class Data implements IteratorAggregate //IteratorAggregate( solusi Array Object Iterasi manual) adalah kelas bawaan dari php
{
    var string $first = "first";
    public string $second = "second";
    private string $third = "third";
    protected string $forth = "forth";

    // public function getIterator()
    // {
    //     $array = [
    //         "first" => $this->first,
    //         "second" => $this->second,
    //         "third" => $this->third,
    //         "forth" => $this->forth,
    //     ];
    //     return new ArrayIterator($array);
    // }

    // ini menggunakan generator lebih singkat dari array iterator / syntax commend di atas
    public function getIterator()
    {
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "forth" => $this->forth;
    }
}

//kalau pakai IteratorAggregate harus menambahkan getIterator(){}
$data = new Data();

// Object Iteration, hanya visibility public dan protected yang keluar/yang bisa di akses
foreach ($data as $property => $values) {
    echo "$property : $values" . PHP_EOL;
}
