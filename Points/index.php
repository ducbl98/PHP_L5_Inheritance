<?php

use Point\Point2D;
use Point\Point3D;

include_once "vendor/autoload.php";

$p2d=new Point2D(5,4);
$p3d=new Point3D(5,4,6);
echo $p2d;
echo $p3d;