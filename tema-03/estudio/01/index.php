<?php

    // Teniendo las siguientes variables definidas:
    $a = 10;
    $b = '10';
    $c = 5;
    $d = 'Hola Pepe';
    $e = 'Hola Luis';
    $f = 'hola';

    // Comprobamos las expresiones:
    $a==$b; // True son iguales
    $a===$b; // False son iguales pero de distinto tipo
    $a!==$b; // True $a es de distinto tipo que $b
    $b>$c; // True $b es mayor que $c
    var_dump($a!=$c); // True $a es distinto de $c
    $a<>$c; // True igual que la anterior
    $d==$e; // False no son cadenas idénticas
    $d[0]==$e[0]; // True su primer carácter es idéntico
    var_dump($d[0]==$f); // False su primer carácter es distinto (hay distinción de mayúsculas y minúsculas)

    $Resultado=($a>$c)? 'Es Mayor':'Es Menor';
    // Dara como resultado Es Mayor porque $a es mayor que $b
    echo $Resultado;
    