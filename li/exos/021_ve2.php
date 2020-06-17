<?php

$methode[2] = 'Méthode <strong>Manipulations Array</strong>';

function ve2($A1 = 0, $N = 7)
{
  $m_ini = memory_get_usage();
  $n     = str_repeat('45645df56456456',100);
  $m_fin = memory_get_usage();
  $a[]   = mf($m_fin - $m_ini);

  return $a;
}

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