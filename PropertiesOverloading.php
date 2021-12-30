<?php
//intinya magic function overloading adalah dimana ketika melakukan request jika tidak tersedia maka akan dilarikan ke
//magic function jika magic functionnya tidak tersedia maka akan error 
class Zero
{
    private array $properties = [];
    // public string $firstName = "Ali";

    //magic function mendapatkan dan mengecek apakah properties tersedia atau tidak
    //jika tidak maka akan dijalankan
    //magic function __get berguna melakukan pengecekan properti ada atau tidak, jika tidak menggunakan ini maka akan error
    public function __get($name)
    {
        // echo "Access properties $name" . PHP_EOL;
        return $this->properties[$name]; // memanfaatkan magic function
    }

    //magic function melakukan set apakah properties tersedia atau tidak
    //jika tidak maka akan dijalankan
    //magic function __get berguna melakukan pengecekan properti ada atau tidak, jika tidak menggunakan ini maka tidak akan ada keluaran
    public function __set($name, $value)
    {
        // echo "Set properties $name with $value value" . PHP_EOL;
        $this->properties[$name] = $value; // memanfaatkan magic function
    }

    public function __isset($name): bool //return nya bool
    {
        // echo "Isset $name" . PHP_EOL;
        return isset($this->properties[$name]); // memanfaatkan magic function
    }

    public function __unset($name)
    {
        // echo "Unset $name" . PHP_EOL;
        unset($this->properties[$name]); // memanfaatkan magic function
    }

    //pengecekan function tersedia or tidak jika tidak akan menggunakan magic function __call
    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call static function $name with arguments $join" . PHP_EOL;
    }
}
// $zero = new Zero();
// echo $zero->firstName . PHP_EOL;
// echo $zero->middleName . PHP_EOL; // properti ini tidak di deklarasikan, dan akan dilarikan ke magic function __get
// $zero->middleName = "Ali"; //  // properti ini tidak di deklarasikan, dan akan dilarikan ke magic function __set

// //sama seperti diatas logikanya
// isset($zero->middleName);
// unset($zero->middleName);

$zero = new Zero();
$zero->firstName = "Muhammad";
$zero->middleName = "Ali";
$zero->lastName = "Albair";

echo "First Name : $zero->firstName" . PHP_EOL;
echo "Middle Name : $zero->midlleName" . PHP_EOL;
echo "Last Name : $zero->lastName" . PHP_EOL;

$zero->sayHello("Ali", "Albair"); // function ini tidak ada deklarasi function maka akan dilarikan ke __call function
Zero::__callStatic("Ali", "Albair"); // static function, function ini tidak ada deklarasi function maka akan dilarikan ke __callStatic function
