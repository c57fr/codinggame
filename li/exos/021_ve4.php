<?php

$methode[4] = 'Méthode <strong>Avec Yield</strong>';

function ve4 ($A1 = 0, $N = 7) {
    return [];
  };


function ve4_v1()
{
  $n    = 0;
  $seen = [7 => 0];
  $val  = 0;
  while (true) {
    yield $val;
    if (array_key_exists($val, $seen)) {
      $val = $seen[$val];
    } else {
      $val        = 0;
      $seen[$val] = $n;
      ++$n;
    }
  }
}

// $gen = ve3(); // 2do test $gen = la function()

$y = 7;
foreach (ve4_v1() as $v) {
  echo $v.' ';
  --$y;
  if ($y <= 0) {
    break; // infinite loop prevent
  }
}

/*
Partie Python
https://rosettacode.org/wiki/Van_Eck_sequence


def van_eck():
  n = 0
  seen = [0]
  val = 0
  while True:
  yield val
  if val in seen[1:]:
    val = seen.index(val, 1)
  else:
    val = 0
  seen.insert(0, val)
  n += 1

*/


// 2do Organigramme