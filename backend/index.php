<?php
include "Circle.php";
include "Rectangle.php";
include "Shape.php";


header('Access-Control-Allow-Origin: *');
$data = ["message" => "Hi from BackEnd"];
echo json_encode($data);

$shape = new Shape("Red");
$rectangle = new Rectangle("5", "10");
$circle = new Circle("3");
?>