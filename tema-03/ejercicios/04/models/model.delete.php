<?php

/**
 * Eliminar un registro
 */

$id = $_GET['id'];
$libros = get_tabla_libros();
$indice_eliminar = buscar_tabla($libros, 'id', $id);

if ($indice_eliminar !== 'false') {

    unset($libros[$indice_eliminar]);
}else{
    echo "ERROR: alumnos no econtrado";
    exit();
}

