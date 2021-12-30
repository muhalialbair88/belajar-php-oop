<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Ali";
$manager->sayHello("Muhammad");

$vp = new VicePresident();
$vp->name = "Albair";
$vp->sayHello("Muhammad");
