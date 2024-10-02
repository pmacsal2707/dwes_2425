<?php

    /**
     * Actividad 2.2.2. is_null()
     */

    // Crear un script PHP donde se muestre el resultado de 3 valores verdaderos y tres valores falsos para la función is_null()

    // Variable no definida
    var_dump(value: is_null($var));
    echo "<BR>";
    echo "<BR>";

    //Se asigna la constante NULL
    $var = NULL;
    var_dump( is_null($var) );
    echo "<BR>";
    echo "<BR>";

    //La variable es destruida con unset()
    unset($var);
    var_dump( is_null($var) );
    echo "<BR>";
    echo "<BR>";

    // Variable con valor numérico
    $var = 5;
    var_dump( is_null($var) );
    echo "<BR>";
    echo "<BR>";

    // Variable con valor de cadena
    $var = "5";
    var_dump( is_null($var) );
    echo "<BR>";
    echo "<BR>";

    // Variable con valor booleano
    $var = true;
    var_dump( is_null($var) );