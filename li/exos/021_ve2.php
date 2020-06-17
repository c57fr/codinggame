<?php

$methode[2] = 'Manipulations Array';

function ve2($A1 = 0, $N = 7)
{
  $m_ini = memory_get_usage();
  $n     = str_repeat('45645df56456456', 100);
  $m_fin = memory_get_usage();
  $a[]   = mf($m_fin - $m_ini);

  return $a;
}

// 2do Organigramme

function seen($arr)
{
  // global $arr;
  // $v = end($arr);
  affArr();
  echo 'xxx: '.($v = array_pop($arr)).'<br>';
  affArr();
  if (in_array($v, $arr, true)) {
    echo 'Oui: '.$v.' présent ds $arr<br>';
    $n = 333; // 2fix calcul index
  } else {
    echo 'Non: '.$v.' pas déjà vu ds $arr<br>';
    $n = 0;
  }
  array_push($arr, $v, $n);
  // return $arr
  affArr();
}

$arr = [777, 0, 0,  1, 0, 2, 0, 2, 2, 1];
// $arr = [7, 8, 9];
// seen($arr);
// next = 6 au lieu du 333
// = trouver l'index du 1 (der elt) sans lui

// Pour compatibilité php < 7.3
if (!function_exists('array_key_first')) {
  function array_key_first(array $array)
  {
    if ($array === []) {
      return null;
    }
    foreach ($array as $key => $_) {
      return $key;
    }
  }
}

if (!function_exists('array_key_last')) {
  function array_key_last(array $array)
  {
    if ($array === []) {
      return null;
    }

    return array_key_first(array_slice($array, -1));
  }
}
affArr();
$affArr(array_slice($arr, 0, -1)); // Tout le tablo sauf dernier
// $arr = array_flip($arr);
// echo array_key_last(array_slice($arr, -1));

exit;
array_pop($arr);
affArr();
affArr($arr = array_flip($arr));
vdli($arr);
// array_flip($arr);
// affArr();

// echo (array_key_last(array_flip($arr)));
