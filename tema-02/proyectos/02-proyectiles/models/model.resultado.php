<?php

/**
 * **********************************************
 *            Modelo: modelSumar.php            *
 * Descripción: suma los valores del formulario *
 * **********************************************
 */

// print_r($_GET);

// Cargo en variables
$velocidadInicial = $_POST['valor1'];
$anguloGrados = $_POST['valor2'];

// Defino constantes
define('G', 9.81); // Aceleración de la gravedad en m/s²

// Convertir el ángulo de grados a radianes
$anguloRadianes = ($anguloGrados * (pi() / 180));

// Realizo los cálculos
$velocidadHorizontal = ($velocidadInicial * cos($anguloRadianes)); // (Vox = V0 * cos(A0))
$velocidadVertical = ($velocidadInicial * sin($anguloRadianes)); // (Voy = V0 * sin(A0))
$alcanceMaximo = (($velocidadInicial ** 2) * sin(2 * $anguloRadianes) / G); // Xmax = (g * V0^2 * sin(2 * A0)) / g
$alturaMaxima = (($velocidadInicial ** 2) * (sin($anguloRadianes) ** 2) / (2 * G)); // Ymax = (V0^2 * sin^2(A0)) / (2 * g)
$tiempoTotal = ((2 * $velocidadInicial * sin($anguloRadianes)) / G); // t = (2 * V0 * sin(A0)) / g

//Formateo de resultados
$velocidadInicial=number_format( $velocidadInicial,2,',','.');
$anguloGrados=number_format($anguloGrados,2,',','.');
$velocidadHorizontal=number_format($velocidadHorizontal,2,',','.');
$velocidadVertical=number_format($velocidadVertical,2,',','.');
$alcanceMaximo=number_format($alcanceMaximo,2,',','.');
$alturaMaxima=number_format($alturaMaxima,2,',','.');
$tiempoTotal=number_format($tiempoTotal,2,',','.');
$anguloRadianes=number_format($anguloRadianes,5,',','.');