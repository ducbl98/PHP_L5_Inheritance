<?php

namespace Circle;

use JetBrains\PhpStorm\Pure;

class Cylinder extends Circle
{
    public int|float $height;

    /**
     * Cylinder constructor.
     * @param string $name
     * @param float|int $radius
     * @param float|int $height
     */
    #[Pure] public function __construct(string $name, float|int $radius, float|int $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    #[Pure] public function calculateArea(): float|int
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height; // TODO: Change the autogenerated stub
    }

    #[Pure] public function calculateVolume(): float|int
    {
        return parent::calculateArea() * $this->height; // TODO: Change the autogenerated stub
    }
}