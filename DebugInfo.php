<?php
//function magic __debugInfo() sama seperti vardump, tetapi dia lebih detail aja dan bisa ditentukan 
//apa yang mau didebug dengan menggunakan array
require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Ali";
$student1->value = 100;
$student1->setSample("xxx");

var_dump($student1);

// masih banyak contoh-contoh magic function, dapat dilihat di documentasi :
// magic function biasanya diawali dengan __(underscore2x)
// https://www.php.net/manual/en/language.oop5.magic.php
