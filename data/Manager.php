<?php

class Manager
{
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name): void
    {
        echo "Hi $name my name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends manager
{
    public function __construct(string $name = "")
    {
        //tidak wajib tapi direkomendasikan memanggil construct parrent ketika overriding
        parent::__construct($name, "VP");
    }

    function sayHello(string $name): void // overriding
    {
        echo "Hi $name my name is VP $this->name" . PHP_EOL; // kalau di overide ini yang keluar
        // echo "Hi $name my name is Manager $this->name" . PHP_EOL; // kalau tidak maka ini yang keluar
    }
}
