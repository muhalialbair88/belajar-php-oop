<?php

class Category
{
    private string $name;
    private bool $expensive;

    //function getter and setter berguna untuk mendapatkan datanya serta me-setnya propertinya
    public function getName(): string
    {
        return $this->name . PHP_EOL;
    }
    public function setName(string $name): void
    {
        //buat validasi untuk menvalidate data yang masuk
        if (trim($name) != "") {
            $this->name = $name;
        }
    }

    public function isExpensive(): bool
    {
        return $this->expensive . PHP_EOL;
    }

    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }
}
