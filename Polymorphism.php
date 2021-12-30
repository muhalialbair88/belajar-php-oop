<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Ali");
var_dump($company);
$company->programmer = new BackendProgrammer("Ali");
var_dump($company);
$company->programmer = new FrontendProgrammer("Ali");
var_dump($company);

sayHelloProgrammer(new programmer("Muhammad")); //polymorphism function
sayHelloProgrammer(new BackendProgrammer("Ali")); //polymorphism function
sayHelloProgrammer(new FrontendProgrammer("Albair")); //polymorphism function
