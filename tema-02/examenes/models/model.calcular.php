<?php

/**
 * **********************************************
 *          Modelo: model.calcular.php          *
 * **********************************************
 */

// Cargo las variables
$radio = $_GET['valor1'];
$frecuencia = $_GET['valor2'];
$masa = $_GET['valor3'];

$vTangencial = (2*M_PI*$radio*$frecuencia);
$aCentripeta = ($vTangencial**2)/$radio;
$fCentripeta = $masa*$aCentripeta;
$periodo = 1/$frecuencia;

// Formateamos los valores
$vTangencial = number_format($vTangencial,2,',','.');
$aCentripeta = number_format($aCentripeta,2,',','.');
$fCentripeta = number_format($fCentripeta,2,',','.');
$periodo = number_format($periodo,10,',','.');