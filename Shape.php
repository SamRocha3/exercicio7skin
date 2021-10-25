<?php

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

    public function Calcular_Area($value){
        $area = "A área do Objeto é ". $value;
        return $area;
    }

    public function PropObjeto($objeto){
        //$newobj = new Shape($objeto->length, $objeto->width, $objeto->name);
        $newobj = new Shape();
        $newobj->name   = $objeto->name;
        $newobj->length = $objeto->length;
        $newobj->width  = $objeto->width;
        $newobj->id     = uniqid('S');
        
        echo "Nome: {$newobj->name} <br>
        length: {$newobj->length} <br>
        width: {$newobj->width} <br>
        Id: {$newobj->id} <br>";
    }
}
