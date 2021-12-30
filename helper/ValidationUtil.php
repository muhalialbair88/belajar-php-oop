<?php

class ValidationUtil
{

    // ini cara manual
    // cara ini akan membuat beberapa x jika ingin mengecek validation 
    // contoh validation login, dll
    static function validate(LoginRequest $request)
    {
        // 2 properti username dan password
        if (!isset($request->username)) {
            throw new ValidationException("Username is not set");
        } else if (!isset($request->password)) {
            throw new ValidationException("Password is is not set");
        } else if (is_null($request->usernam)) {
            throw new ValidationException("Password is null");
        } else if (is_null($request->password)) {
            throw new ValidationException("Password is null");
        }
    }

    //ini cara lebih efficient yaitu menggnakan framework validation reflection
    // cara ini dapat mengecek  validation tanpa membuat manual atau berulang-ulang 
    // contoh validation login, dll
    static function validateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        // 2 pengecekan isnull and is initialized
        foreach ($properties as $property) {
            if (!$property->isInitialized($request)) {
                throw new ValidationException("$property->name is not set");
            } else if (is_null($property->getValue($request))) {
                throw new ValidationException("$property->name is null");
            }
        }
    }
}
