<?php

    /**
     * Definición de constantes
     */

    # Usuario

    Define('USUARIO', 'root');
    echo "El nombre del usuario es: " . USUARIO; // El nombre de una constante no se puede incluir en una cadena delimitada por comillas dobles porque PHP no va a sustituir el valor
    // Tampoco hace falta poner $ para llamarla