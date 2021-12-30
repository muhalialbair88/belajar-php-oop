<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Ali";
$student1->value = 10;
$student1->setSample("xxx"); // semua visibility properti di cloning syntax ini visibility private
var_dump($student1);

//cara manual clone 
// $student2 = new Student();
// $student2->id = "1";
// $student2->name = "1";
// $student2->value = 10;

// var_dump($student1);

//cara lebih simple menggunakan object cloning / keyword clone
//tidak perlu deklarasi propertinya lagi 
$student2 = clone $student1;
var_dump($student2);

//alur jika ingin memodifikasi property yang akan di clone
//$studen1 => clone $student2 => $student2 ->__clone() 