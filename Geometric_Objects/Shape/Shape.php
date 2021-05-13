<?php

namespace Shape;

class Shape
{
    public string $name;

    /**
     * Shape constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function show()
    {
        echo "I'm a shape . My name is {$this->name}";
    }
}