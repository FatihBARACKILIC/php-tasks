<?php

// Sekil adında bir sınıf oluşturun ve bu sınıfından türeterek Dikdörtgen, Üçgen ve Kare isimlerinde 3 sınıf daha oluşturun.
// Amacımız; en mantıklı yoldan daha az kod yazarak her şeklin özelinde kendini alan ve çevrelerini hesaplamak.

abstract class Shape
{
    protected $edge;
    protected $high;

    public function __construct($edge, $high = 0)
    {
        $this->edge = $edge;
        $this->high = $high;
    }

    abstract public function area(): int;

    abstract public function perimeter(): int;
}

class Square extends Shape
{
    public function area(): int
    {
        return $this->edge * $this->edge;
    }

    public function perimeter(): int
    {
        return $this->edge * 4;
    }
}

class Rectangle extends Shape
{

    public function area(): int
    {
        return $this->edge * $this->high;
    }

    public function perimeter(): int
    {
        return 2 * ($this->edge + $this->high);
    }
}

class Triangle extends Shape
{

    public function area(): int
    {
        return ($this->edge * $this->high) / 2;
    }

    public function perimeter(): int
    {
        return $this->edge * 3;
    }
}