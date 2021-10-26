<?php
require_once 'Shape.php';

class Circle extends Shape{

    const TIPO = 3;
    protected $radius;

    function __construct($length, $width, $name, $radius){
        parent::__construct($length, $width);
        
        $this->radius = $radius;
    }
    
    public function Calcular_Area($radius){
        $value = pi()*($radius * $radius);
        $area = "A área do Objeto é ". $value;
        return $area;
    }
    
    public function Prop_Objeto(){
        return new ShapeDTO($this->name, $this->radius, $this->id);
    }
}