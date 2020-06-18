<?php

$methode[2] = 'Manipulations Array';

function ve2($A1 = 0, $N = 7)
{
  $arr   = [$A1];
  $m_ini = memory_get_usage();
  for ($i = 1; $i < $N + 1; ++$i) {
    $arr = seen($arr);
  }
  $m_fin = memory_get_usage();
  array_pop($arr);
  $arr[] = mf($m_fin - $m_ini);

  return $arr;
}

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

// Bilan:
// ++ : Idem ve1
// -- : Idem ve1
// ==>: Env. 30% + rapide que ve1, mais gourmande si $N élevé

// https://www.codingame.com/training/easy/van-ecks-sequence

//##################################################################
/*

Solution dans codding :

<?php

function ve2($A1 = 0, $N = 7)
{
  $arr   = [$A1];
  for ($i = 1; $i < $N + 1; ++$i) {
    $arr = seen($arr);
  }
  array_pop($arr);

  return $arr;
}

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
echo end(ve2($A1, $N))."\n";

*/
