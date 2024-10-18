<?php
    /*
        Modelo: model.filter.php
        Descripción: permite filtrar la tabla a partir de una expresión.
        Todas las filas que contengan dicha expresión se mostrarán.

        Método GET:
            - id alumno que se desea editar
    */

    # Cargo id del alumno que voy a editar
    $expresion = $_GET['expresion'];

    # Cargar la tabla de alumnos
    $alumnos = get_tabla_alumnos();

    # Filtamos la tabla a partir de la expresión

    // Creo un array vacio donde iré cargando las filas que cumplen
    // con la expresión de filtrado
    $aux = [];

    // Recorrer la tabla fila a fila para comprobar la expresión
    foreach($alumnos as $registro) {
        if (array_search($expresion, $registro, false)) {
            $aux[] = $registro;
        }
    }

    $alumnos = $aux;