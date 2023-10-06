<?php

namespace App\Classes;

use App\Interfaces\Resizable;

class Circle extends Shape implements Resizable
{
    private float $radius;
    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return 3.14 * pow($this->radius, 2);
    }

    public function resize($value)
    {
        $this->radius *= $value;
    }
}
