<?php

$methode[2] = 'Méthode <strong>Manipulations Array</strong>';

$ve[2] = function ($A1 = 0, $N = 7) {
  return [];
};

// 2do Organigramme

function seen($arr)
{
  global $arr;
  $v = end($arr);
  affArr();
  array_pop($arr);
  affArr();
  if (in_array($v, $arr, true)) {
    echo 'Oui: '.$v.' présent ds $arr<br>';
    $n = 3; // 2fix calcul index
  } else {
    echo 'Non: '.$v.' pas déjà vu ds $arr<br>';
    $n = 0;
  }
  array_push($arr, $v, $n);
  // return $arr
  affArr();
}

$arr = [1, 777,  2, 3, 777];
affArr();
// array_pop($arr);
affArr();
seen($arr);