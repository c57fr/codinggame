<?php

function plusPetit($argument1, $argument2)
{
  if ($argument1 < $argument2) {
    return $argument1;
  }

  return $argument2;
}
echo plusPetit(10, 9);
echo '<br>';
echo plusPetit(120, 18);
echo '<hr>';

//Créer une fonction from scratch qui s'appelle plusPetit(). Elle prendra trois arguments de type int. Elle devra retourner le plus petit des trois.

function plusPetit3($argument1, $argument2, $argument3)
{
  return min($argument1, $argument2, $argument3);
}
//$min = min(plusPetit([23, 3, 78]));
//echo $min;
echo plusPetit3(23, 4, 28);
