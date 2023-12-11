<?php
include_once "Shape.php";

class Rectangle extends Shape {

    function __construct(public $width, public $height) {
        $this->width = $width;
        $this->height = $height;
    }
}
?>