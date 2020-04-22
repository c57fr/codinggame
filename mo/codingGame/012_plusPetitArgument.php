<?php

if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
} // vdli()

//Créer une fonction from scratch qui ...

$txt = 'Juste renomme ce fichier selon<br>ton prochain exercice...';

 vdli($txt);

// Ouvre la page dans chrome, puis efface le code à partir de là

//Créer une fonction from scratch qui s'appelle plusPetit(). Elle prendra trois arguments de type int. Elle devra retourner le plus petit des trois.

function plusPetit($argument1, $argument2, $argument3)
{
  return min($argument1, $argument2, $argument3);
}
//$min = min(plusPetit([23, 3, 78]));
//echo $min;
echo plusPetit(23, 4, 28);
?>

