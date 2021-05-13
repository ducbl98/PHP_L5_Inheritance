<?php

namespace Circle;

use JetBrains\PhpStorm\Pure;
use Shape\Shape;

include_once "../vendor/autoload.php";
class Circle extends Shape
{
    public int|float $radius;

    /**
     * Circle constructor.
     * @param string $name
     * @param float|int $radius
     */
    #[Pure] public function __construct(string $name, float|int $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    #[Pure] public function calculateArea(): float|int
    {
        return pow($this->radius, 2) * pi();
    }

    #[Pure] public function calculatePerimeter(): float|int
    {
        return $this->radius * pi() * 2;
    }


}