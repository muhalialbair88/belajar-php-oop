<?php

require_once "data/Person.php";

$ali = new Person("Ali", "Jakarta");
$ali->name = "Ali";
$ali->sayHello("Budi");

$albair = new Person("Albair", null);
$albair->name = "Albair";
$albair->sayHello(null);

$ali->info();
$albair->info();
