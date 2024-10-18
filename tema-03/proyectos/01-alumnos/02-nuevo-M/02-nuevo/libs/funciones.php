<?php

/**
 * Funciones proyecto 31 CRUD de alumnos
 */

 function get_tabla_alumnos(){
    $tabla=[
        [ 
            'id' => 1,
            'nombre' => 'Juan',
            'apellidos' => 'García Pérez',
            'fecha' => '2000/12/31',
            'curso' => '2DAW',
            'poblacion' => 'Ubrique'
        ],
        [ 
            'id' => 2,
            'nombre' => 'Pedro',
            'apellidos' => 'Romero Pérez',
            'fecha' => '2000/11/31',
            'curso' => '2DAW',
            'poblacion' => 'Villamartín'
        ],
        [ 
            'id' => 3,
            'nombre' => 'María',
            'apellidos' => 'Pérez Garcés',
            'fecha' => '1998/12/31',
            'curso' => '2DAW',
            'poblacion' => 'Bornos'
        ],
        [ 
            'id' => 4,
            'nombre' => 'Pedro',
            'apellidos' => 'Rodríguez Sánchez',
            'fecha' => '1995/12/31',
            'curso' => '2DAW',
            'poblacion' => 'Jerez de la Fra.'
        ]
    ];
    return $tabla;

 }
 function buscar_tabla($tabla, $columna,$valor){
    $columna_id=array_column($tabla,$columna);
    $indice=array_search($valor,$columna_id);
    return $indice;

 }

 function buscar_tabla_2($tabla, $columna,$valor){
    $columna_id=array_column($tabla,$columna);
    $indice=array_search($valor,$columna_id);
    return $indice;

 }