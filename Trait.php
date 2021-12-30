<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayGoodBye, SayHello, HasName};

$person = new Person();
$person->goodBye("Ali");
$person->hello("Albair");

$person->name = "Muhammad";
var_dump($person);

$person->run();
