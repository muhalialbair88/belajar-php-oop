<?php

namespace Data\Traits;

// cara menambahkan properti ke trait
trait SayGoodBye
{
    function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good bye" . PHP_EOL;
        }
        echo "Good bye $name" . PHP_EOL;
    }
}

trait SayHello
{
    function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        }
        echo "Hello $name" . PHP_EOL;
    }
}

// cara menambahkan property ke trait
trait HasName
{
    public string $name;
}

//trait abstract function
trait CanRun
{
    //abstract function pada trait wajib di overriding
    public abstract function run(): void;
}

// class parentPersont
// {
//     public function goodBye(?string $name): void
//     {
//         echo "Good bye in Person" . PHP_EOL;
//     }

//     public function hello(?string $name): void
//     {
//         echo "Hello in Person" . PHP_EOL;
//     }
// }
trait All //trait inheritance use all di class yang ingin menggunakan
{
    use SayGoodBye, SayHello, HasName, CanRun {
        //trait visibility override
        // hello as private;
        // goodBye as privete;
    }
}

//memanggil semua properti dan function trait kedalam class Person
class Person
// extends parentPersont, jika parrent person adalah parent dan function trait di parrent person maka parentPerson yang akan teroverride
//tapi trait akan teroverride oleh childnya yaitu parrent person
{
    use All;

    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }

    //override trait
    //jika membuat function sama seperti function trait dan melakukan penggunaan trait tersebut maka yang diutamakan adalah function dari class tersebut
    //contoh nya function di bawah / class ini akan diutamakan
    //jadi yang teroverride itu trait ke class
    //beda lagi kalau traitnya punya parrent, contoh liat class ParentPerson diatas.
    public function goodBye(?string $name): void
    {
        echo "Good bye in Person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }
}
//jika syntax diatas semua aktif maka
//ParentClass = override by=> Trait =override by=> child class