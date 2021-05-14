<?php


namespace Triangle;


class Triangle
{
    public float|int $edge1;
    public float|int $edge2;
    public float|int $edge3;
    public float|int $side;
    public float|int $side1;
    public float|int $side2;
    public float|int $side3;

    /**
     * Triangle constructor.
     */
    public function __construct($edge1 = 1.0, $edge2 = 1.0, $edge3 = 1.0)
    {
        $this->edge1 = $edge1;
        $this->edge2 = $edge2;
        $this->edge3 = $edge3;
        $this->side = $edge1 + $edge2 + $edge3;
        $this->side1 = $edge1 + $edge2 - $edge3;
        $this->side2 = $edge2 + $edge3 - $edge1;
        $this->side3 = $edge3 + $edge1 - $edge2;
    }

    /**
     * @return mixed
     */
    public function getEdge1(): mixed
    {
        return $this->edge1;
    }

    /**
     * @param float|int|mixed $edge1
     */
    public function setEdge1(mixed $edge1): void
    {
        $this->edge1 = $edge1;
    }

    /**
     * @return float|int|mixed
     */
    public function getEdge2(): mixed
    {
        return $this->edge2;
    }

    /**
     * @param float|int|mixed $edge2
     */
    public function setEdge2(mixed $edge2): void
    {
        $this->edge2 = $edge2;
    }

    /**
     * @return float|int|mixed
     */
    public function getEdge3(): mixed
    {
        return $this->edge3;
    }

    /**
     * @param float|int|mixed $edge3
     */
    public function setEdge3(mixed $edge3): void
    {
        $this->edge3 = $edge3;
    }

    public function getArea(): float|int
    {
        return pow($this->side1 * $this->side2 * $this->side3*$this->side,0.5)/4;
    }

    public function getPerimeter():float|int
    {
        return $this->side;
    }
    public function __toString(): string
    {
        return "Triangle { 3 edges :".$this->edge1.",".$this->edge2.",".$this->edge3." ; Area: ".$this->getArea()." ;Perimeter: ".$this->getPerimeter()." }";
    }
}