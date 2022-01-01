<?php
require_once 'vendor/autoload.php';

use App\Shape\TriangleStrategy;
use App\Shape\SquareStrategy;
use App\Shape\CircleStrategy;

$radius = 10;
$width = 10;
$height = 10;

$TriangleStrategy = new TriangleStrategy($width, $height);
$SquareStrategy = new SquareStrategy($width, $height);
$CircleStrategy = new CircleStrategy($radius);

echo sprintf('半径 %d, ', $radius);
echo sprintf('横幅 %d, ', $width);
echo sprintf('高さ %d<br>↓', $height);
echo '<br>';
echo '三角形：' . $TriangleStrategy->getArea() . 'cm2';
echo '<br>';
echo '四角形：' . $SquareStrategy->getArea() . 'cm2';
echo '<br>';
echo '円：' . $CircleStrategy->getArea() . 'cm2';
echo '<br>';