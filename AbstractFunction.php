<?php

require_once "data/Animal.php";

use Data\{Animals, Cat, Dog};

$cat = new Cat();
$cat->name = "Luna";
$cat->run();

$dog = new Dog();
$dog->name = "Utop";
$dog->run();
