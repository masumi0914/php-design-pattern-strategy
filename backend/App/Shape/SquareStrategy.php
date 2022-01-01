<?php

namespace App\Shape;
use App\Shape\Interfaces\ShapeInterface;

class SquareStrategy implements ShapeInterface
{
  private $width = 0;
  private $height = 0;

  public function __construct($width, $height)
  {
    $this->width = $width;
    $this->height = $height;
  }

  public function getArea() 
  {
    $area = $this->width * $this->height;
    return round($area);
  }
}