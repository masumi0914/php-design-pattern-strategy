<?php

namespace App\Shape;
use App\Shape\Interfaces\ShapeInterface;

class CircleStrategy implements ShapeInterface
{
  private $radius = 0;

  public function __construct($radius)
  {
    $this->radius = $radius;
  }

  public function getArea() 
  {
    $area = pow($this->radius, 2) * pi();
    return round($area);
  }
}