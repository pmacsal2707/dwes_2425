<?php

    /*
        Ejemplo 13.

        Array o Matrices

        Matriz bidimensional con índices escalares
    */

    // Usando corchetes
    $matriz = 
            [ 
                [3, 5, 7, 8, 10],
                [6, 2, 7, 0, 9],
                [6, 4, 9, 1, 5],

            ];

    // muestro el 7 del segundo array       
    //echo $matriz[1] [2]; 

    foreach ($matriz as $i => $array) {
        foreach ($array as $j => $valor) {
            echo 'matriz['.$i.']['.$j.'] = '.$valor;
            echo '<BR>';
        }
    }

    