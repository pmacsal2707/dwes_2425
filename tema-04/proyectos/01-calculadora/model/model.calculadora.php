<?php

    /*
        modelo: model.calculadora.php
        descripción: realiza los cálculos
    */

    # Cargar los datos del formulario
    $valor1 = $_GET['valor1'];
    $valor2 = $_GET['valor2'];
    $operacion = $_GET['operacion'];

    # Creo objeto calculadora
    $calcular = new Class_calculadora(
        $valor1,
        $valor2,
        $operacion,
        null
    );

    # Evalúo la operación 
    switch ($operacion) {
        case 'sumar' : $calcular->sumar();break;
        case 'restar' : $calcular->restar();break;
        case 'multiplicar' : $calcular->multiplicar();break;
        case 'dividir' : $calcular->dividir();break;
        default: echo 'Operación no válida'; break;
    }