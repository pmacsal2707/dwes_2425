<?php

    /*
        Modelo:  model.create.php
        Descripción: añade un nuevo libro a la taba

        Método POST:
            - id
            - titulo
            - autor
            - editorial
            - genero
            - precio
    */

    # Extraemos los valores del formulario usando el método POST
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editorial = $_POST['editorial'];
    $genero = $_POST['genero'];
    $precio = $_POST['precio'];

    # Cargar tabla libros
    $libros = get_tabla_libros();

    # Creamos array asociativo con los detalles del nuevo libro
    $registro=[
        'id'=> $id,
        'titulo' => $titulo,
        'autor' => $autor,
        'editorial' => $editorial,
        'genero' => $genero,
        'precio' => $precio
    ];

    # Añadir nuevo libro a la tabla - lo añade al final del array
    $libros[] = $registro;

    # array_push($libros,$registro); Tambíen podemos añadir el nuevo libro al array así