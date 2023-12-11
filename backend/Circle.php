<?php
include_once "Shape.php";

class Circle extends Shape {

    function __construct(public $radius) {
        $this->radius = $radius;
    }
}
?>