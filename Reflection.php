<?php

require_once "exception/VarlidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "Rahasia"; //isi null jika ingin error
$request->password = "Rahasia"; //isi null jika ingin error
// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);


//Keuntungan pakai reflection
//Jika kita membuat class validation baru maka akan langsung bisa dijalankan 
//contoh 
class RegisterUserRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

//langsung membuat objek dan cek exception dari propertinya
$register = new RegisterUserRequest();
$register->name = "Ali"; // jika ini tidak di set maka akan ketangkep di exception "name is not set"
$register->address = "Jakarta"; // jika ini tidak di set maka akan ketangkep di exception  "address is not set"
$register->email = "Muhalialbair98@gmail.com"; // jika ini tidak di set maka akan ketangkep di exception  "email is not set"

ValidationUtil::validateReflection($register);
// ValidationUtil::validate($register); // cara manual, jika menggunakan ini maka akan error


// untuk lebih detailnya doc reflection : https://www.php.net/manual/en/book.reflection.php