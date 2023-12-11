<?php

abstract class Shape {

    function __construct(public $color) {
        $this->color = $color;
    }

    //abstract public function calculateArea();
}
?>