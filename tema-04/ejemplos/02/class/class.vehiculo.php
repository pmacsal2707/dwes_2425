<?php

/*
        Clase:  class.vehiculo.php
        Descripción: definición de la clase vehículo
    */

class Class_vehiculo
{
    # Propiedades
    public $matricula;
    public $velocidad;

    #Métodos o funciones
    //Constructor
    //Método que se ejecuta automáticamente cuando se crea un objeto a partir de dicha clase
    // Hay que poner doble _ para llamar al constructor.  No vale llamarlo de otra forma.
    public function __construct(
        $matricula = null,
        $velocidad = null
    )
    {
        $this->matricula = $matricula;
        $this->velocidad = $velocidad;
    }

    # Método que devuelve la propiedad matrícula
    public function getMatricula()
    {
        return $this->matricula;
    }

    # Método  que devuelve la propiedad velocidad
    public function getVelocidad()
    {
        return $this->velocidad;
    }

    # Método que establece la propiedad matrícula
    public function setMatricula($matricula)
    {
        return $this->matricula;
    }

    # Método que establece la propiedad velocidad
    public function setVelocidad($velocidad)
    {
        return $this->velocidad;
    }


    # Método que aumenta la velocidad
    public function aumentarVelocidad()
    {
        $this->velocidad++;
    }


    # Método que disminuye la velocidad
    public function disminuirVelocidad()
    {
        $this->velocidad--;
    }

    # Método que disminuye frena el coche
    public function freno()
    {
        $this->velocidad = 0;
    }
}
