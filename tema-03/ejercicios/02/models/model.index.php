<?php

/**
 * *************************
 * Modelo: model.index.php *
 * *************************
 */

$o = array();
$p = 0;
for ($i = 1; $i < 11; $i++) {
    for ($j = 1; $j < 11; $j++) {
        $o[$i][$j] = $i * $j;
    }
}