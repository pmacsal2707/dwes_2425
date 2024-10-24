<?php

    /*
        Ejemplo 5

        Descripción: uso clase libro con encapsulamiento
    */

    # Cargo la clase libro
    include 'class/class.libro.php';

    # Crear un objeto libro vacío
    $libro1 = new Class_libro();

    # Asignar valores al libro
    $libro1->setId(1);
    $libro1->setTitulo('Cien años de soledad');
    $libro1->setPrecio(10.54);
    $libro1->setPaginas(25);
    $libro1->setAutor('Grabiel García Márquez');
    $libro1->setTematica(['Novela', 'Drama', 'Romance']);

    # Mostrar detalles clase lbro
    echo 'Id: '. $libro1->getId();
    echo '<BR>';
    echo 'Título: '. $libro1->getTitulo();
    echo '<BR>';
    echo 'Precio: '. $libro1->getPrecio();
    echo '<BR>';
    echo 'Páginas: '. $libro1->getPaginas();
    echo '<BR>';
    echo 'Autor: '. $libro1->getAutor();
    echo '<BR>';
    echo 'Temática: '. implode(', ', $libro1->getTematica());
    echo '<BR>';echo '<BR>';

    # Crear objeto libro con parámetros
    $libro2 = new Class_libro(
        2,
        'La historia Interminable',
        23.45,
        34,
        'Mikel Ende',
        ['Novela', 'Ficción', 'Juvenil']
    );

    # Mostrar detalles clase lbro2
    echo 'Id: '. $libro2->getId();
    echo '<BR>';
    echo 'Título: '. $libro2->getTitulo();
    echo '<BR>';
    echo 'Precio: '. $libro2->getPrecio();
    echo '<BR>';
    echo 'Páginas: '. $libro2->getPaginas();
    echo '<BR>';
    echo 'Autor: '. $libro2->getAutor();
    echo '<BR>';
    echo 'Temática: '. implode(', ', $libro2->getTematica());
    echo '<BR>';