<?php

    /*
        Librería proyecto 3.1 CRUD alumnos
    */

    # Obtiene la tabla de alumnos
    function get_tabla_alumnos () {

        $tabla = [
            [
                'id' => 1,
                'nombre' => 'Juan',
                'poblacion' => 'Ubrique',
                'curso' => '2DAW'
            ],
            [
                'id' => 2,
                'nombre' => 'María',
                'poblacion' => 'Ubrique',
                'curso' => '2DAW'
            ],
            [
                'id' => 3,
                'nombre' => 'Luís',
                'poblacion' => 'Villamartín',
                'curso' => '1DAW'
            ],
            [
                'id' => 4,
                'nombre' => 'Marta',
                'poblacion' => 'Ubrique',
                'curso' => '2DAW'
            ]
        ];
        return $tabla;
    }