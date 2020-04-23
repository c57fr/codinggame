<?php

function plusGrand($notes)
{
  return count($notes) ? max($notes) : null;
}
$arr = [2, 5, 7];
var_dump(plusGrand($arr));
echo '<hr>';
$arr = [];
var_dump(plusGrand($arr));

  // Créer une fonction from scratch qui s'appelle plusGrand(). Elle prendra un argument de type array. Elle devra retourner le plus grand des élements présent dans l'array. Si l'array est vide, il faudra retourner null;
