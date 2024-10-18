<?php

/**
 * Funciones proyecto 31 CRUD de alumnos
 */
// creamos una función get
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
function buscar_tabla($tabla, $columna,$valor){
    $columna_id=array_column($tabla,$columna);
    $indice=array_search($valor,$columna_id);
    return $indice;

 }