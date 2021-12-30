<?php

interface HelloWorld
{
    function sayHello(): void;
}

//tidak perlu deklarasi class 
// class SampleHelloWorld implements HelloWorld
// {
//     public function sayHello(): void
//     {
//         echo "Hello world" . PHP_EOL;
//     }
// }
// $helloWorld = new SampleHelloWorld();
// $helloWorld->sayHello();

//pakai anonymous class(KHUSUS KASUS SEDERHANA!!)

//class("Ali") adalah constructor secara langsung hanya pada anonymous class
$helloWorld = new class("Ali") implements HelloWorld
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};
$helloWorld->sayHello();
