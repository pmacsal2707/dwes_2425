<?php

    /**
     * Tipos de variables
     */

    #tipo boolean
    $test = true;
    echo "\$test: ";
    var_dump(value: $test);
    echo "<br><br> ";

    #Integer
    $inte = 7; 
    echo "\$inte: ";
    var_dump(value: $inte);
    echo "<br><br> ";

    // # float exponencial
    $distancia = 1.70e4;
    echo "\$distancia: ";
    var_dump(value: $distancia);
    echo "<br><br> ";

    # tipo string '' simple
    $mensaje = "La distacia recoorrida fue de $distancia km";
    echo "\$mensaje: ";
    var_dump(value: $mensaje);

    # tipo string '' doble
    $mensaje = 'La distacia recoorrida fue de' . '$distancia km';
    echo "\$mensaje: ";
    var_dump(value: $mensaje);