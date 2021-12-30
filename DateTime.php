<?php

//Doc Datetime : https: //www.php.net/manual/en/class.datetime.php
//Doc DateIntervalDuration : https://www.php.net/manual/en/dateinterval.construct.php
//Doc FormatDateTime : https://www.php.net/manual/en/datetime.format.php

$dateTime = new DateTime();
$dateTime->setDate(1998, 1, 20); // harus full tahun-bulan-tanggal
$dateTime->setTime(10, 10, 10, 0); // hasur full juga

// contoh menambahkan 1 tahun
$dateTime->add(new DateInterval("P1Y")); // P adalah periode, ini wajib ditulis

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true; // interval -1 bulan
$dateTime->add($minusOneMonth);

var_dump($dateTime);

//setTimezone selain di file php.ini menggunakan function 
$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);

$string = $now->format("Y-m-d H:i:s"); // merubah ke string menggunakan format();
echo "Waktu Saat Ini : $string";

//parse DateTime
$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10", new DateTimeZone("Asia/Jakarta")); // merubah ke string menggunakan format();, kadang ini berguna saat user menginputkan data (mengambil waktunya)
var_dump($date);

//hanya untuk pengecekan jika createFormFormat salah
if ($date) {
    var_dump($date);
} else {
    echo "Format Salah";
}
