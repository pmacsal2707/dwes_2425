<?php

/**
 * Eliminar un registro
 */

$id = $_GET['id'];
$alumnos = get_tabla_alumnos();
$indice_eliminar = buscar_tabla($alumnos, 'id', $id);

if ($indice_eliminar !== 'false') {

    unset($alumnos[$indice_eliminar]);
}else{
    echo "ERROR: alumnos no econtrado";
    exit();
}

/*
for ($i = 0; $i < count($alumnos); $i++) {
    if ($alumnos[$i] == $id) {
        unset($alumnos[$i]);
        $alumnos = array_values($alumnos);
    }
}
    */
