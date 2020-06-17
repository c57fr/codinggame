<?php

$methode[2] = 'Manipulations Array';

function ve2($A1 = 0, $N = 7)
{
  $arr= [$A1];
  $m_ini = memory_get_usage();
  for ($i = 1; $i < $N+1; ++$i) {
    $arr=seen($arr);
  }
  // $n     = str_repeat('45645df56456456', 100);
  $m_fin = memory_get_usage();
  $arr[] = mf($m_fin - $m_ini);

  return $arr;
}

// 2do Organigramme

function seen($arr)
{
  $v = end($arr);
  if (in_array($v, array_slice($arr, 0, -1), true)) {
    $is = array_flip(array_slice($arr, 0, -1));
    $n  = count($arr) - 1 - $is[$v];
  } else {
    $n = 0;
  }
  array_push($arr, $n);
  return $arr;
}

// $arr = [777, 0, 0,  1, 0, 2, 0, 2, 2, 1];
// // $arr = [7, 8, 9];
// $arr = [7];

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
// affArr();
// $affArr(array_slice($arr, 0, -1)); // Tout le tablo sauf dernier
// // $arr = array_flip($arr);
// // echo array_key_last(array_slice($arr, -1));
// vdli($arr);

// // echo array_key_first($arr);
// echo $vi=count($arr)-1; // = v index
// vdli(array_flip($arr));
// vdli($is=array_flip(array_slice($arr, 0, -1)));
// echo count($arr)-1-$is[end($arr)];
// exit;
// array_pop($arr);
// affArr();
// affArr($arr = array_flip($arr));
// vdli($arr);
// array_flip($arr);
// affArr();

// echo (array_key_last(array_flip($arr)));
