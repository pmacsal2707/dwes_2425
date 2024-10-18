<?php

    /*
    Model: model.order.php

    Descripción: permite ordenar la tabla por cualquiera de las columnas
    siempre en orden nascendente

    Método GET:
        - criterio: id, nombre, población, curso
    */

    # Obetenemos criterio de ordenación
    $criterio=$_GET['criterio'];
    
    # cargamos la tabla
    $alumnos=get_tabla_alumnos();
    
    // Cargo en un array todos los valoresde la columna de ordenación
    $aux=array_column($alumnos,$criterio);  // Esto genera un array con todos registros con los valores del criterio que vayamos a utilizar

    // Función array_multisort
    array_multisort($aux,SORT_ASC,$alumnos);
