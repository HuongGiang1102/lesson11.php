<?php
class Rectangle {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }

    public function calculatePerimeter() {
        return 2 * ($this->length + $this->width);
    }
}
$length = '5';
$width = '6';
$rectangle = new Rectangle($length, $width);
echo "Area of rectangle:" . $rectangle->calculateArea() . "\n";
echo "Perimeter of rectangle:" . $rectangle->calculatePerimeter();
?>
