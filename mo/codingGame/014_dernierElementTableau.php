<?php

if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
} // vdli()

// https://www.codingame.com/playgrounds/32339/exercices-de-php-pour-debutant

//  Créer une fonction from scratch qui s'appelle dernierElementTableau(). Elle prendra un argument de type array. Elle devra retourner le premier élement du tableau. Si l'array est vide, il faudra retourner null;

/**
 * Retourne le dernier élément d'un tableau.
 *
 * $notes: Le tableau des notes
 */
function dernierElementTableau(array $notes): ?string
{
  return 'der element ou null'; // Change ICI :-)
}

$arr = [78, 9, 77];
var_dump(dernierElementTableau($arr));
echo '<hr>';
$arr = [];
var_dump(dernierElementTableau($arr));
