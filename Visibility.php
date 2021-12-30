<?php
require "data/Product.php";

//public bisa diakses secara global
//protected bisa diakses secara turunan dan class itu sendiri
// private bisa diakses hanya oleh class itu sendiri


$product = new Product("Watermelon", 25000);

// echo $product->name . PHP_EOL; // error karna property memiliki visibility private
// echo $product->price . PHP_EOL; // error karna property memiliki visibility private
//solusinya panggil menggunakan function get 

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Dummy", 1000);
$dummy->info();
