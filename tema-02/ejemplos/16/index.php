<?php

    /**
     * Función: is_null()
     */

    // Variable no definida
    var_dump(value: is_null(value: $var));
    echo "<BR>";

    //Se asigna la constante NULL
    $var = NULL;
    var_dump( is_null($var) );
    echo "<BR>";

    //La variable es destruida con unset()
    unset($var);
    var_dump( is_null($var) );
    echo "<BR>";

    // Aqui devolverá true porque la variable no es nula
    $var = 5;
    var_dump( is_null($var) );
    echo "<BR>";