<?php

function plusPetit($argument1, $argument2)
{
  if ($argument1 < $argument2) {
    return $argument1;
  }

  return $argument2;
}

// Créer une fonction from scratch qui s'appelle plusPetit(). Elle prendra deux arguments de type int. Elle devra retourner le plus petit des deux.

echo plusPetit(10, 9);
echo '<br>';
echo plusPetit(120, 18);
echo '<hr>';

// Soluce de Li
function plusPetit_Li($a, $b)
{
  return ($a < $b) ? $a : $b;
}
echo plusPetit_Li(10, 9);
echo '<br>';
echo plusPetit_Li(120, 18);
echo '<hr>';

//Créer une fonction from scratch qui s'appelle plusPetit3(). Elle prendra trois arguments de type int. Elle devra retourner le plus petit des trois.

function plusPetit3($argument1, $argument2, $argument3)
{
  return min($argument1, $argument2, $argument3);
}
echo plusPetit3(23, 4, 28);
