<?php


function validateLoginRequest(LoginRequest $request)
{
    if (!isset($request->username)) {
        throw new ValidationException("Username is null"); //kalau belum di set maka akan error dan dilarikan ke throw
    } else if (!isset($request->password)) {
        throw new ValidationException("Password is null"); //kalau belum di set maka akan error dan dilarikan ke throw
    } else if (trim($request->username) == "") {
        throw new Exception("Username is empty"); //exception(class) bawaan dari PHP
    } else if (trim($request->username) == "") {
        throw new Exception("Password is empty"); //exception(class) bawaan dari PHP
    }
}
//jadi bisa membuat exception sendiri(ValidationException) atau dari bawaan PHP (Exception)