<?php
class Point {
    private $x;
    private $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function calculateDistance($otherPoint) {
        $deltaX = $otherPoint->x - $this->x;
        $deltaY = $otherPoint->y - $this->y;
        return sqrt($deltaX * $deltaX + $deltaY * $deltaY);
    }
}
$point1 = new Point(6, 9);
$point2 = new Point(2, 1);

echo "Distance: " . $point1->calculateDistance($point2) . "\n";
?>
