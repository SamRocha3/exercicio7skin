<?php
require_once 'Shape.php';

class Rectangle extends Shape{

    const TIPO = 2;

    function __construct($length, $width){
        parent::__construct($length, $width);
    }

    public function Calcular_RectangleArea($length, $width){
        $rectangleArea = $length*$width;
        return parent::Calcular_Area($rectangleArea);
    }
}