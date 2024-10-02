<?php

    /**
     * Actividad 2.2.4. empty()
     */

    // Crear un script PHP donde se muestre el resultado de 3 valores verdaderos y tres valores falsos para la función empty()
    
    //La variable no está definida. empty() devuelve true
    var_dump( empty($var) );
    echo "<BR>";
    echo "<BR>";

    //empty() devuelve true. El valor de $var es nulo
    $var;
    var_dump( empty($var) );
    echo "<BR>";
    echo "<BR>";

    //empty() devuelve true para un string vacío
    $var = "0";
    var_dump( empty($var) );
    echo "<BR>";
    echo "<BR>";

    //empty() devuelve false para el valor lógico true
    $var = true;
    var_dump( empty($var) );
    echo "<BR>";
    echo "<BR>";

    //empty() devuelve true para un string vacío
    $var = "6";
    var_dump( empty($var) );
    echo "<BR>";
    echo "<BR>";
    
    //empty() devuelve false para el valor lógico true
    $var = 8;
    var_dump( empty($var) );
    echo "<BR>";