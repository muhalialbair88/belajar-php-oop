<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Ali";
$student1->value = 100;

$student1(1, "Ali", true); // erorr jika tidak ada magic function __invoke()

// masih banyak contoh-contoh magic function, dapat dilihat di documentasi :
// magic function biasanya diawali dengan __(underscore2x)
// https://www.php.net/manual/en/language.oop5.magic.php