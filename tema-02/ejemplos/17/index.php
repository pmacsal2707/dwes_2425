<?php

    /**
     * Función: isset()
     */

    //isset() devuelve false por que $var no ha sido definida
    var_dump( isset($var) );
    echo "<BR>";

    //isset() devuelve false aunque la variable haya sido declarada pues //su valor es NULL
    $var;
    var_dump( isset($var) );
    echo "<BR>";

    //isset() devuelve true. El valor ya no es nulo aunque esté vacío
    $var = "";
    var_dump( isset($var) );