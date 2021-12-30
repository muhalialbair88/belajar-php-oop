<?php

namespace Data;

//by default interface adalah abstract class
//by default function pada interface adalah abstract (tidak memiliki body)
//keduanya tidak perlu menuliskan abstract didepannya
//turunannya tidak menggunakan extends meainkan implements
//turunannya bisa lebih dari 1 interface, jika class biasa hanya 1 class
//tidak memiliki properti selain const

interface HasBrand
{
    function getBrand(): string;
}

interface isMaintenance
{
    function isMaintenante(): bool;
}

interface Car extends HasBrand
{
    function drive(): void;
    function getTire(): int;
}

class Avanza implements Car, isMaintenance
// boleh inheritence(extends) tapi tidak boleh dari 1
//contoh : class Avanza extends Manager implements Car{}
{
    function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }
    function getTire(): int
    {
        return 4;
    }
    function getBrand(): string // harus mengimplemen tasikan function ini karna Car extends HasBrand
    {
        return "Avanza";
    }
    function isMaintenante(): bool
    {
        return false;
    }
}
