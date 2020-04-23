<?php

if (!function_exists('vdli')) {
    include '../../dev/vdli.php';
  } // vdli()

//  Créer une fonction from scratch qui s'appelle premierElementTableau(). Elle prendra un argument de type array. Elle devra retourner le premier élement du tableau. Si l'array est vide, il faudra retourner null;

function premierElementTableau($notes){
    return $notes[0] ?? null;
}
//var_dump(premierElementTableau(4,78));

$arr = [78, 9];
vdli(premierElementTableau($arr));
echo '<hr>';
$arr = [];
var_dump(premierElementTableau($arr));
