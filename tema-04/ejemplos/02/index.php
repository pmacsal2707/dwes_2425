<?php
/*
    Ejemplo
    Descripción: crear objetos a partir de la clase Class_alumno
*/

# hay que cargar la clase del controlador
include 'class/class.vehiculo.php';


$vehiculo = new Class_vehiculo('1234BFH');

# Mostrar detalles
echo "Matricula: " . $vehiculo->getMatricula();
echo '<br>';
echo "Velocidad: " . $vehiculo->getVelocidad();
echo '<br>';
var_dump($vehiculo);