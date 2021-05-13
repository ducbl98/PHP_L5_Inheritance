<?php

namespace Quadrilateral;

use JetBrains\PhpStorm\Pure;
use Shape\Shape;
include_once "../vendor/autoload.php";

class Rectangle extends Shape
{
    public int|float $width;
    public int|float $height;

    #[Pure] public function __construct( string $name,int|float $width, int|float $height)
    {
        parent::__construct($name);
        $this->height=$height;
        $this->width=$width;
    }

    public function calculateArea(): float|int
    {
        return $this->width*$this->height;
    }
    public function calculatePerimeter(): float|int
    {
        return ($this->width+$this->height)*2;
    }
}