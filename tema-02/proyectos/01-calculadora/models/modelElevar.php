<?php
    /**
     * **********************************************
     * Modelo: modelSumar.php                       *
     * Descripción: suma los valores del formulario *
     * **********************************************
     */

     // print_r($_GET);

     // Cargo en variables
     $valor1 = $_GET['valor1'];
     $valor2 = $_GET['valor2'];

     // Creo variable con la operación
     $operacion = "Potencia";

     // Realizo los cálculos
     $resultado = pow($valor1, $valor2);