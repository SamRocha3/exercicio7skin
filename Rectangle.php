<?php
require Shape.php;

class Rectangle extends Shape{

    const TIPO = 2;

    function __construct($length, $width){
        parent::__construct($length, $width);
    }
}