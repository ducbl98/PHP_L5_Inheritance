<?php
namespace Circles;

class Circle
{
    public float $radius;
    public string $color;
    public float $area;

    /**
     * @return float
     */
    public function getArea(): float
    {
        return $this->area;
    }

    /**
     * Circles constructor.
     * @param float $radius
     * @param string $color
     */
    public function __construct(float $radius, string $color)
    {
        $this->radius = $radius;
        $this->color = $color;
        $this->area = pi() * pow($this->radius, 2);
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     */
    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return "Circles { Radius :".$this->radius." ,Color :".$this->color." ,Area: ".$this->area."}";
    }

}