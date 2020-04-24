<?php

function plusPetit1($notes)
{
  return count($notes) ? min($notes) : null;
}
$arr1 = [34, 43, 56, 78, 3, 1];
var_dump(plusPetit1($arr1));
echo '<hr>';
var_dump(plusPetit1([]));

// Créer une fonction from scratch qui s'appelle plusPetit(). Elle prendra un argument de type array. Elle devra retourner le plus petit des élements présent dans l'array. Si l'array est vide, il faudra retourner null;
