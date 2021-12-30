<?php

require_once "exception/VarlidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = " ";
$loginRequest->password = " ";
//jika terjadi error program akan berhenti, jika tidak mau berhenti begini solusinya 
// try-catch

try {
    validateLoginRequest($loginRequest); // panggil function yang kira-kira menyebabkan error
} catch (ValidationException $exception) { // error contoh di ValidationException(validation.php), di tampung di $exception
    echo "Validation Error : {$exception->getMessage()}" . PHP_EOL;
} catch (Exception $exception) { // error contoh di Exception(validation.php), di tampung di $exception
    echo "Validation Error : {$exception->getMessage()}" . PHP_EOL;
}
//intinya catch adalah menangkap setiap error yang terjadi, dan kita set catchnya 2x karna cek validationnya 2x 
//1. ValidationException
//2. Exception
// bisa lebih tergantung pengecekan

//jika exceptionnya sama keluarannya bisa begini 
try {
    validateLoginRequest($loginRequest); // panggil function yang kira-kira menyebabkan error
    echo "VALID";
} catch (ValidationException | Exception $exception) { // error contoh di ValidationException(validation.php), di tampung di $exception
    echo "Validation Error : {$exception->getMessage()}" . PHP_EOL; //jika username dan password tidak di set maka akan keluaran null, jika diset tapi " " maka akan keluaran empety

    var_dump($exception->getTrace()); //debug infomasi jika error, balikannya adanya array
    //kalau mau balikannya string 
    var_dump($exception->getTraceAsString());
} finally { // finally jika gk peduli error menggunakan finally
    echo "ERROR ATAU ENGGAK, AKAN DIEKSEKUSI" . PHP_EOL;
}
//jika gk peduli error menggunakan finally
