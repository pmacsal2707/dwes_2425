<?php
    /**
     * ***********************************************
     * Modelo: modelMultiplicar.php                  *
     * Descripción: resta los valores del formulario *
     * ***********************************************
     */

     // print_r($_GET);

     // Cargo en variables
     $valor1 = $_GET['valor1'];
     $valor2 = $_GET['valor2'];

     // Creo variable con la operación
     $operacion = "Multiplicación";

     // Realizo los cálculoss
     $resultado = $valor1 * $valor2;