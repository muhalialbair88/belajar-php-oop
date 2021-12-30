<?php

require_once "data/person.php";

$person = new Person("Ali", "Jakarta");
$person->name = "Ali";
$person->address = "Jakarta";


echo "Name : {$person->name}" . PHP_EOL;
echo "Address : {$person->address}" . PHP_EOL;
echo "Country : {$person->country}" . PHP_EOL;

$person2 = new Person("Albair", "Bekasi");
$person2->name = "Albair";
$person2->address = "Bekasi";


echo "Name : {$person2->name}" . PHP_EOL;
echo "Address : {$person2->address}" . PHP_EOL;
echo "Country : {$person2->country}" . PHP_EOL;

//error
// $person2->name = [];
