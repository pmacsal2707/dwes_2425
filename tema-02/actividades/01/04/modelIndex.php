<?php

    /**
     * Modelo del ejercicio 2.1.4.
     */

    /*
    Ejercicio 2.1.4.

    Este ejercicio se guardará en la carpeta DWES/Tema-02/Actividades/01/04/index.php

    Crear en un script Php que cree dos variables una de tipo float y otra de tipo int. Almacenar en 
    nuevas variables el resultado de la suma, resta, división, producto y potencia. Mostrar mediante 
    var_dump() las variables con los resultados de las operaciones anteriores.
     */

     
    // Definir las variables de tipo float e int
    $real = 3.1415;   // Variable tipo float
    $entero = 7;      // Variable tipo int

    // Realizar las operaciones
    $suma = $real + $entero;
    $resta = $real - $entero;
    $multiplicacion = $real * $entero;
    $division = $real / $entero;
    $potencia = $real ** $entero;