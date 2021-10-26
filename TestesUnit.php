<?php

require_once 'Shape.php';
require_once 'Rectangle.php';
require_once 'Circle.php';

$length = 2;
$width  = 3;
$name   = "retangulo";
$radius = 1;

$areaRectangle = new Rectangle($length, $width);
if(6 === $areaRectangle->Calcular_RectangleArea($length, $width)){
    echo "Calculo area do retangulo, OK";
} else {
    echo "Calculo area do retangulo, FALHOU";
};

$areaCircle = new Circle($length, $width, $name, $radius);
if(pi() === $areaCircle->Calcular_AreaCircular($radius)){
    echo "Calculo area do Circulo, OK";
} else {
    echo "Calculo area do Circulo, FALHOU";
};