<?php
$calif = 9;
switch (true) {
    case ($calif < 0):
        $nota = 'La nota no existe';
        break;
    case ($calif < 3):
        $nota = 'Deficiente';
        break;
    case ($calif < 5):
        $nota = 'Insuficiente';
        break;
    case ($calif < 7):
        $nota = 'Bien';
        break;
    case ($calif < 9):
        $nota = 'Notable';
        break;
    case ($calif < 10):
        $nota = 'Sobresaliente';
        break;
    default:
        $nota = 'La nota no existe';
}
echo "Tipo de nota: " . $nota;
