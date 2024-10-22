<?php

    /**
     * Librería proyecto 3.1 CRUD libros
     */

    // Obtiene la tabla de libros
    function get_tabla_libros()
    {
        $tabla = [
            [
                'id' => 1,
                'titulo' => 'Los señores del tiempo',
                'autor' => 'García Sénz de Urturi',
                'genero' => 'Novela',
                'editorial' => 'Anaya',
                'precio' => '19.5',
            ],
            [
                'id' => 2,
                'titulo' => 'El Rey recibe',
                'autor' => 'Eduardo Mendoza',
                'genero' => 'Novela',
                'editorial' => 'Anaya',
                'precio' => '20.5',
            ],
            [
                'id' => 3,
                'titulo' => 'Diario de una mujer',
                'autor' => 'Eduardo Mendoza',
                'genero' => 'Juvenil',
                'editorial' => 'Anaya',
                'precio' => '12.95',
            ],
            [
                'id' => 4,
                'titulo' => 'El Quijote de la Mancha',
                'autor' => 'Miguel de Cervantes',
                'genero' => 'Novela',
                'editorial' => 'Anaya',
                'precio' => '15.95',
            ]
        ];
        return $tabla;
    }

    // Creamos una función que comprueba que el libro que se le mete por parámetros existe
    function buscar_tabla($tabla, $columna, $valor){
        $columna_id = array_column($tabla, $columna);
        $indice = array_search($valor, $columna_id);
        return $indice;
    }

    // Creamos una función que comprueba si un valor existe en una columna específica de la tabla y devuelve su índice
    function buscar_tabla_2($tabla, $columna, $valor) {
        foreach ($tabla as $indice => $registro) {
            if ($registro[$columna] == $valor ) {
                return $indice;
            }
        }
        return false;
    }