<?php
// doc RegularExpression https://www.php.net/manual/en/ref.pcre.php
$matches = [];
//preg_match_all adalah mengecek kata(match pattern) preg_match/preg_match_all ($pattern, $subject)
$result = (bool)preg_match_all("/ali|awam|koko/i", "Muhammad Ali Albair", $matches); // /i adalah In Case Sensitive tidak masalah besar kecil
var_dump($result);
var_dump($matches);

//preg_replace adalah mereplace/ganti kata(match pattern) yang diinginkan
$result = preg_replace("/anjing|bangsat/i", "*****", "AnjiNG, Muka lo kayak Bangsat!!"); // /i adalah In Case Sensitive tidak masalah besar kecil
$tambahanaja = "Dilarang ngomong JOROK!!";
var_dump($result . $tambahanaja);

//preg_split adalah mesplit kata(match pattern)
$result = preg_split("/[\s,-]/", "Saya adalah, Muhammad Ali Albair"); // "/[\s,-]/" ini sama seperti explode mensplit \s adalah spasi ,koma dan -strip
var_dump($result);

//baca materi doc regularexpression karna penting , disini hanya bahas sedikit
//contoh validasi harus email, harus url dll
