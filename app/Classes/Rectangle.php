<?php

namespace App\Classes;

use App\Interfaces\Resizable;

class Rectangle extends Shape implements Resizable
{
    private float $width;
    private float $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }

    public function resize($value)
    {
        $this->width *= $value;
        $this->height *= $value;
    }
}
