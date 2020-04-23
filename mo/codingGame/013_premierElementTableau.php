<?php

if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
} // vdli()

//  Créer une fonction from scratch qui s'appelle premierElementTableau(). Elle prendra un argument de type array. Elle devra retourner le premier élement du tableau. Si l'array est vide, il faudra retourner null;

/**
 * Retourne le 1er élément d'un tableau
 */
function premierElementTableau(Array $notes): ?int
{
  return $notes[0] ?? null;
}
//var_dump(premierElementTableau(4,78));

$arr = [78, 9];
vdli(premierElementTableau($arr));
echo '<hr>';
$arr = [];
var_dump(premierElementTableau($arr));
echo '<hr><hr>';

////////////////////////////////////////////////////////////////////
//
// Solution avec des if
//
function premierElementTableauIf($notes)
{
  if (!empty($notes)) {
    return $notes[0];
  }

  return null;
}
//var_dump(premierElementTableau(4,78));
var_dump(premierElementTableauIf([78, 9]));
echo '<hr>';
var_dump(premierElementTableauIf([]));

echo '<hr>';

$str = 'Ma chaîne de caractères...)';
vdli($str);
vdli($str[0]);
