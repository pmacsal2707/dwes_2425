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