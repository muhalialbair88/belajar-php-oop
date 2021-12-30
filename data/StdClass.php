<?php

$array = [
    "firstName" => "Muhammad",
    "middleName" => "Ali",
    "lastName" => "Albair"
];

//contoh mengakses array begini
// $array["firstName"];

//contoh mengakses object begini
// $array->firstName; // objek use ->
$object = (object)$array; // convert array ke object / menjadi stdClass
var_dump($object); // stdClass / object

echo "First Name $object->firstName" . PHP_EOL;
echo "Middle Name $object->middleName" . PHP_EOL;
echo "Last Name $object->lastName" . PHP_EOL;

$arrayLagi = (array)$object; // convert Object ke array lagi
var_dump($arrayLagi);

// Object Person
$person = new Person("Ali", "Jakarta");
var_dump($person);

// convert Object Person ke array 
$arrayPerson = (array)$person;
