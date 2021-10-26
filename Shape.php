<?php
include 'ShapeDTO.php';
class Shape {

    public      $name;
    protected   $width;
    protected   $length;
    private     $id;

    const TIPO = 1;

    function __construct($length, $width, $name){
        $this->length = $length;
        $this->width  = $width;
        $this->name  = $name;
        $this->id = uniqid('S'); 
    }

    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id = $id;
    }

    public function Calcular_Area($length, $width){
        $value = $length*$width;
        $area = "A área do Objeto é ". $value;
        return $area;
    }

    public function Prop_Objeto(){
        return new ShapeDTO($this->length, $this->width, $this->name, $this->id);
    }
}
