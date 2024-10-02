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
$anguloRadianes = $anguloGrados * (pi() / 180);

// Realizo los cálculos
$velocidadHorizontal = $velocidadInicial * cos($anguloRadianes); // (Vox = V0 * cos(A0))
$velocidadVertical = $velocidadInicial * sin($anguloRadianes); // (Voy = V0 * sin(A0))
$alcanceMaximo = ($velocidadInicial ** 2) * sin(2 * $anguloRadianes) / G; // Xmax = (g * V0^2 * sin(2 * A0)) / g
$alturaMaxima = ($velocidadInicial ** 2) * (sin($anguloRadianes) ** 2) / (2 * G); // Ymax = (V0^2 * sin^2(A0)) / (2 * g)
$tiempoTotal = (2 * $velocidadInicial * sin($anguloRadianes)) / G; // t = (2 * V0 * sin(A0)) / g