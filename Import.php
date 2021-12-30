<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";


use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict();
$conflict1 = new data\Two\Conflict();

helpMe();

echo APPLICATION . PHP_EOL;
