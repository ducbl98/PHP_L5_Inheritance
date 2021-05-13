<?php

namespace Quadrilateral;

use JetBrains\PhpStorm\Pure;

class Square extends Rectangle
{
    #[Pure] public function __construct(string $name, float|int $width)
    {
        parent::__construct($name,$width, $width);
    }
}