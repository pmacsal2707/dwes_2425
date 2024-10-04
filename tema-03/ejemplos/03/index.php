<?php

    /**
     * ejemplo3
     * Calificación de una nota 0 a 10
     * Mostará: deficiente, insuficiente, suficiente, bien, notable o sobresaliente
     */

    $dwes = 3;

    if ($dwes < 0 || $dwes > 10) {
        echo "Calificación no permitida";
    } else if ($dwes <= 2) {
        echo "deficiente";
    } else if ($dwes < 5) {
        echo "insuficiente";
    } else if ($dwes < 6) {
        echo "suficiente";
    } else if ($dwes < 7) {
        echo "bien";
    } else if ($dwes < 9) {
        echo "notable";
    } else {
        echo "sobresaliente";
    }