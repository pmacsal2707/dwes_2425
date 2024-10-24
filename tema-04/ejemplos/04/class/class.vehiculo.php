<?php

/**
 * Clase: class.vehiculo.php
 * Descripcion: definicion de la clase vehiculo
 * autor:
 * version:
 * fecha
 */

 class Class_vehiculo
 {
    public $matricula;
    public $velocidad;

    public function __construct(){
        $this->matricula = null;
        $this->velocidad = null;
    }
    public function getvelocidad(){
        return $this->velocidad;   
    }
    public function getmatricula(){
        return $this->matricula; 
    }
    public function setvelocidad($velocidad){
        $this->velocidad=$velocidad;     }
    public function setmatricula($matricula){
         $this->matricula=$matricula; 
    }
    public function aumentarvelocidad(){
         $this->velocidad++;
    }
    public function disminuirvelocidad(){
         $this->velocidad--;
    }
    public function parar(){
         $this->velocidad=0;
    }
 }