<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Ali";
$student1->value = 10;

$student2 = clone $student1;

//membandingkan 2 buah object
var_dump($student1 == $student2); // ini adalah cara mengcompare property objek secara tidak identik
var_dump($student1 === $student2);// ini adalah cara mengcompare property objek secara identik, hasilnya false karna berbeda memory penempatannya
