<?php

use Circles\Circle;
use Circles\Cylinder;

include_once "vendor/autoload.php";

$circle = new Circle(10,"blue");
echo $circle."<br>";
$cylinder = new Cylinder(10,"green",10);
echo $cylinder;