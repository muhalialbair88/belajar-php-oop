<?php

class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    public function __clone()
    {
        //Jika ingin memodifikasi hasil clone nya silahkan membuat __clone()
        //contohnya disini kita tidak mau mencopy properti $sample / karna diakan private
        unset($this->sample);
    }

    public function __toString() //__toString() adalah magic function
    // masih banyak contoh-contoh magic function, dapat dilihat di documentasi :
    // magic function biasanya diawali dengan __(underscore2x)
    // https://www.php.net/manual/en/language.oop5.magic.php

    {
        return "Student Id : $this->id, Name : $this->name, Value : $this->value" . PHP_EOL;
    }

    public function __invoke(...$arguments): void
    {
        $join = join(",", $arguments);
        echo "Invoke student with arguments $join" . PHP_EOL;
    }

    public function __debugInfo(): array
    {
        return [
            //semua properti pada array harus sudah di inisialisasi
            //jika tidak maka akan error
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            //jika ingin mengubah atau menmbahkan bisa
            "author" => "ALI",
            "version" => "1.0.0"
        ];
    }
}
