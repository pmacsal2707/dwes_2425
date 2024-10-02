<?php

    /**
     * Actividad 2.2.3. issetl()
     */

    // Crear un script PHP donde se muestre el resultado de 3 valores verdaderos y tres valores falsos para la función isset()

    // Variable no definida
    var_dump(value: isset($var));
    echo "<BR>";
    echo "<BR>";

    //Se asigna la constante NULL
    $var = NULL;
    var_dump( isset($var) );
    echo "<BR>";
    echo "<BR>";

    //La variable es destruida con unset()
    unset($var);
    var_dump( isset($var) );
    echo "<BR>";
    echo "<BR>";

    // Variable con valor numérico  
    $var = 5;
    var_dump( isset($var) );
    echo "<BR>";
    echo "<BR>";

    // Variable con valor de cadena
    $var = "5";
    var_dump( isset($var) );
    echo "<BR>";
    echo "<BR>";

    // Variable con valor booleano
    $var = true;
    var_dump( isset($var) );