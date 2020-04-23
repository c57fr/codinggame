<?php

if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
} // vdli()

//Créer une fonction from scratch qui s'appelle plusPetit(). Elle prendra trois arguments de type int. Elle devra retourner le plus petit des trois.

function plusPetit($argument1, $argument2, $argument3)
{
  return min($argument1, $argument2, $argument3);
}
echo plusPetit(23, 4, 28);
