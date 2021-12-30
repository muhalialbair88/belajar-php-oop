<?php

require_once "data/Category.php";

//function getter and setter berguna untuk mendapatkan datanya serta me-setnya propertinya
$category = new Category();
$category->setName("Ali");
$category->setExpensive(true);

$category->setName("     "); // memvalidasi properti private, jika diset public user bisa mengubah data seenaknya
echo "Name : {$category->getName()}";
echo "Expensive : {$category->isExpensive()}";
