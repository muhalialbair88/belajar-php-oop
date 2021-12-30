<?php

require_once "data/Location.php";

use Data\{Location, City, Province, Country};


// $location = new Location(); // error karna abstract kelas tidak dapat dibuat objek, solusinya melalui turunannya

//solusinya melalui turunannya
$city = new City();
$province = new Province();
$country = new Country();
