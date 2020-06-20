<?php

$methode[4] = 'Avec Yield';

function ve_yield($A1 = 7) // Tableau [N, index] avec yield
{ 
  $v = $n = $A1;
  $s = [];
  $v = [$A1, $i = 1];

  while (true) {
    $n = array_key_exists($v[0], $s) ? $i - $s[$v[0]] : $n = 0;
    yield $v[0];
    ++$i;
    $s[$v[0]] = $v[1];
    $v        = [$n, $i];
  }
}

// 2fix calcul charge
function ve4($A1, $N)
{
  $m_ini = memory_get_usage();
  foreach (ve_yield($A1) as $v) {
    // echo $v.' ';
    if (!--$N) {
      break; // infinite loop prevent
    }
  }
  $a[] = $v;

  $m_fin = memory_get_usage();
  $a[]   = mf($m_fin - $m_ini);

  return$a;
}
// echo '<hr>Der: '.$v;

/*
Partie Python
https://rosettacode.org/wiki/Van_Eck_sequence#Python


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
