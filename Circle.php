<?php
require_once 'Shape.php';

class Circle extends Shape{

    const TIPO = 3;
    protected $radius;

    function __construct($length, $width, $name, $radius){
        parent::__construct($length, $width);
        
        $this->radius = $radius;
    }
    
    public function Calcular_AreaCircular($radius){
        $circleArea = pi()*($radius * $radius);
        return parent::Calcular_Area($circleArea);
    }
    
    public function PropObjeto($objeto){
        //$newobj = new Circle(null, null, $objeto->name, $objeto->radius);
        $newobj = new Circle();
        $newobj->name   = $objeto->name;
        $newobj->radius = $objeto->radius;
        $newobj->id  = uniqid('C'); 
        
        echo "Nome: {$newobj->name} <br>
        radius: {$newobj->radius} <br>
        Id: {$newobj->id} <br>";
    }
}