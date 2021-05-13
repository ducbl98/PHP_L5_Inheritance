<?php


namespace Point;


use JetBrains\PhpStorm\Pure;

class Point3D extends Point2D
{
    public float $z;

    #[Pure] public function __construct(float $x, float $y, float $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    /**
     * @param float $z
     */
    public function setZ(float $z): void
    {
        $this->z = $z;
    }

    /**
     * @return float
     */
    public function getZ(): float
    {
        return $this->z;
    }

    public function setXYZ(float $x, float $y, float $z)
    {
        parent::setXY();
        $this->z = $z;
    }

    public function getXYZ(): array
    {
        $arr = parent::getXY()();
        $arr[] = $this->z;
        return $arr;
    }

    public function __toString(): string
    {
        return "Coordinate { x :" . $this->x . " ,y :" . $this->y . " ,z :" . $this->z . "}";; // TODO: Change the autogenerated stub
    }
}