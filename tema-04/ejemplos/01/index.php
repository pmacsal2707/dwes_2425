<?php
/*
    Ejemplo
    Descripción: crear objetos a partir de la clase Class_alumno
*/

# hay que cargar la clase del controlador
include 'class/class.vehiculo.php';


$vehiculo = new Class_vehiculo();


var_dump($vehiculo);

# Establecer la matrícula del vehículo "6712HRM"
$vehiculo->setMatricula('6712HRM');

# Establecer lavelocidad a 10km
$vehiculo->setVelocidad(10);

# Mostrar detalles
echo "Matricula: " . $vehiculo->getMatricula();
echo "<br>";
echo "Velocidad: " . $vehiculo->getVelocidad();
