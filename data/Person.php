<?php

class Person
{
    //this untuk mengakses objek(properties) saat ini
    //self untuk mengakses class(constant) saat ini *harus class yang sama 
    const AUTHOR = "Muhammad Ali Albair";
    var string $name;
    var ?string $address = null; //biar bisa menerima null pakai ? jadi logikanya, bisa null apa tidak (Berlaku juga di parameter function) 
    var string $country = "Indonesia"; // default value properties

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info()
    {
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }
}
