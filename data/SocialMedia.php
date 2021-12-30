<?php

// final adalah tidak boleh diturunkan lagi

class SocialMedia
{
    public string $name;
}

// final class Facebook extends SocialMedia
// {
// }
class Facebook extends SocialMedia
{
    //keyword final, berarti function tidak bisa lagi di override
    final public function login(string $userName, string $password): bool
    {
        return true;
    }
}

class FakeFacebook extends SocialMedia
{
    //function dibawah ini error karna function di class parent sudah terdapat keyword final
    public function login(string $userName, string $password): bool
    {
        return false;
    }
}
