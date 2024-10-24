<?php

    /*
        Archivo: index.php
        Descripción: crear objetos a partir de la clase Calculadora
    */

    # Cargar la clase Calculadora
    include 'class/class.calculadora.php';

    # Crear un objeto de la clase Calculadora
    $calculadora = new Class_calculadora();

    # Establecer los valores
    $calculadora->setValor1(5);
    $calculadora->setValor2(3);

    # Realizar operaciones
    $calculadora->suma();
    echo "Operación: " . $calculadora->getOperacion() . "<br>";
    echo "Resultado: " . $calculadora->getResultado() . "<br>";

    $calculadora->resta();
    echo "Operación: " . $calculadora->getOperacion() . "<br>";
    echo "Resultado: " . $calculadora->getResultado() . "<br>";

    $calculadora->multiplicacion();
    echo "Operación: " . $calculadora->getOperacion() . "<br>";
    echo "Resultado: " . $calculadora->getResultado() . "<br>";

    $calculadora->division();
    echo "Operación: " . $calculadora->getOperacion() . "<br>";
    echo "Resultado: " . $calculadora->getResultado() . "<br>";

    $calculadora->potencia();
    echo "Operación: " . $calculadora->getOperacion() . "<br>";
    echo "Resultado: " . $calculadora->getResultado() . "<br>";
