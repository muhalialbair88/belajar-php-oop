<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Ali";
$student1->value = 100;

// menggunakan magic function __toString() untuk mengkonversikan ke string
// echo $string . PHP_EOL; kalau tidak ada magic function __toString() maka error

//bisa seperti ini
$string = (string) $student1;
echo $string . PHP_EOL;

//atau bisa seperti ini
echo $student1 . PHP_EOL;

// masih banyak contoh-contoh magic function, dapat dilihat di documentasi :
// magic function biasanya diawali dengan __(underscore2x)
// https://www.php.net/manual/en/language.oop5.magic.php