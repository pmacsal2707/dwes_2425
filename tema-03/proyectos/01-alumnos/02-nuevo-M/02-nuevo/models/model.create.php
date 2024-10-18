<?php

/**
 * Modelo: model.create.php
 * 
 * Metodo Post:
 *  -nombre
 *  -poblacion
 *  -curso
 */
#Extraemos los valores del formulario
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$poblacion=$_POST['poblacion'];
$curso=$_POST['curso'];

$alumnos=get_tabla_alumnos();

#Creamos array asociativo con los detalles del nuevo alumno
$registro=[
    'id'=>$id,
    'nombre'=>$nombre,
    'poblacion'=>$poblacion,
    'curso'=>$curso
];

#Añadir nuevo alumno a la tabla
$alumnos[]=$registro;

//otra opcion es array_push($alumnos,$registro);