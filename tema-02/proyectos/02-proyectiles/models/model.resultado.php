<?php

/**
 * **********************************************
 *            Modelo: modelSumar.php            *
 * Descripción: suma los valores del formulario *
 * **********************************************
 */

// print_r($_GET);

// Cargo en variables
$velocidadInicial = $_GET['valor1'];
$anguloGrados = $_GET['valor2'];

// Defino constantes
define('G', 9.81); // Aceleración de la gravedad en m/s²

// Convertir el ángulo de grados a radianes
$anguloRadianes = round(($anguloGrados * (pi() / 180)), 5);

// Realizo los cálculos
$velocidadHorizontal = round(($velocidadInicial * cos($anguloRadianes)), 2); // (Vox = V0 * cos(A0))
$velocidadVertical = round(($velocidadInicial * sin($anguloRadianes)), 2); // (Voy = V0 * sin(A0))
$alcanceMaximo = round((($velocidadInicial ** 2) * sin(2 * $anguloRadianes) / G), 2); // Xmax = (g * V0^2 * sin(2 * A0)) / g
$alturaMaxima = round((($velocidadInicial ** 2) * (sin($anguloRadianes) ** 2) / (2 * G)), 2); // Ymax = (V0^2 * sin^2(A0)) / (2 * g)
$tiempoTotal = round(((2 * $velocidadInicial * sin($anguloRadianes)) / G), 2); // t = (2 * V0 * sin(A0)) / g