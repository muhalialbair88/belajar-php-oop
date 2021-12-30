<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

// $mathHelper = new MathHelper();
// echo $mathHelper->$name . PHP_EOL; error undefined, tidak bisa diakses via objek karna static harus melalui class

// call properti static
echo MathHelper::$name . PHP_EOL; //cara mengakses static baik function / properti
echo MathHelper::$name = "Muhammad Ali Albair" . PHP_EOL;

// call function static
$result = MathHelper::sum(10, 10, 10, 10, 10, 10);
echo "Result : $result" . PHP_EOL;
