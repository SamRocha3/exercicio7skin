<?php

require_once 'Shape.php';

class CircleDTO extends Shape{

    const TIPO = 3;
    protected $radius;

    function __construct($length, $width, $name, $radius, $id){
        parent::__construct($length, $width, $name, $id);
        
        $this->radius = $radius;
    }

    public function getRadius(){
        return $this->radius;
    }
    
}