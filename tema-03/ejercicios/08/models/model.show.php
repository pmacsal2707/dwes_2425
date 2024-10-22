<?php
    /*
        Modelo: model.show.php
        Descripción: Muestra formulario con los detalles no editables de un libro

        Método GET:
            - id libro que se desea mostrar
    */

    # Cargo id del libro que voy a editar
    $id = $_GET['id'];

    # Cargar la tabla de libro
    $libros = get_tabla_libros();

    # Buscar id en la tabla libro y devuelvo índice.
    $indice_mostrar = buscar_tabla_2($libros, 'id', $id);

    # Validar la búsqueda
    if ($indice_mostrar === false) {
        
        echo "ERROR: libro no encontrado";
        exit();
    } 

    # Creo el array registro sólo con los detalles del alumno
    $registro = $libros[$indice_mostrar];