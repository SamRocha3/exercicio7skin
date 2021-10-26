<?php

class ShapeDTO {

    private $name;
    private $width;
    private $length;
    private $id;

    const TIPO = 1;

    function __construct($length, $width, $name){
        $this->length = $length;
        $this->width = $width;
        $this->name = $name;
        $this->id = uniqid('S');
    }

    public function getId(){
        return $this->id;
    }
    
    public function getName(){
        return $this->name;
    }
    
    
    public function getWidth(){
        return $this->width;
    }
    
    public function getLegth(){
        return $this->length;
    }
}