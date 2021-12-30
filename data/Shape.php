<?php

namespace Data;

class Shape
{

    public function getCorner()
    {
        return 0;
    }
}

class Rectangle extends Shape
{
    public function getCorner()
    {
        return 4;
    }

    public function getParentCorner()
    {
        // return $this->getCorner(); kalau ini yang di akses yang return nya 4 
        return parent::getCorner(); // ini akses getCorner class parent nya.
    }
}
