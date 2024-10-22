<?php

    /*
    Model: model.order.php

    Descripción: permite ordenar la tabla por cualquiera de las columnas siempre en orden ascendente

    Método GET:
        - criterio: id, título, autor, editorial, género, precio
    */

    # Obetenemos criterio de ordenación
    $criterio=$_GET['criterio'];
    
    # cargamos la tabla
    $libros = get_tabla_libros();
    
    // Cargo en un array todos los valores de la columna de ordenación
    $aux = array_column($libros,$criterio);  // Esto genera un array con todos los registros con los valores del criterio que vayamos a utilizar

    // Función array_multisort, es una función que ordena múltiples arrays
    array_multisort($aux,SORT_ASC,$libros); // En este caso, se utiliza para ordenar el array $libros en base a los valores extraídos en $aux
    // SORT_ASC indica que la ordenación se realiza en orden ascendente