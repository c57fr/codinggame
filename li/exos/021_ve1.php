<?php

$methode[1] = 'Double Boucle for()';

function ve1($A1 = 0, $N = 7)
{
  $m_ini = memory_get_usage();
  $a     = array_fill(0, $N, 0);
  $a[0]  = $A1;

  for ($m=0,$n = 0; $n < $N-1; ++$n) { // On ballaye tous les elts
    for ($m = $n - 1; $m >= 0; --$m) { // on ballaye à l'envers de la clé précédente au début tant que clé >=0 ( = clé existe)
      if ($a[$m] === $a[$n]) { // Si la dernière clé étudiée ($n) == 1 des clés précédente (== on l'a déjà vu)
    $a[$n + 1] = $n - $m; // on passe de 0 à la valeur de l'écart des indexes

    break; // Inutile de ballayer les autres clés précédentes, on sort de cette sous boucle
      }
    }
  }
  $m_fin = memory_get_usage();
  $a[] = mf($m_fin - $m_ini);

  return $a;
}

// Bilan:
// ++ : Traduit comportement humain naturel de prime abord
// -- : On stocke (dans $a) toute la séquence...
// ==>: Sans doute rapide, mais gourmande si $N élevé

// https://www.codingame.com/training/easy/van-ecks-sequence

//##################################################################
/*

Solution dans codding :

<?php
*/
function ve1cdg($A1 = 0, $N = 7)
{
  $a    = array_fill(0, $N, 0);
  $a[0] = $A1;

  for ($n = 0; $n < $N - 1; ++$n) {
    for ($m = $n - 1; $m >= 0; --$m) {
      if ($a[$m] === $a[$n]) {
        $a[$n + 1] = $n - $m;

        break;
      }
    }
  }

  return end($a);
}
// echo ve1cdg($A1, $N)."\n";

// => Pass 4/6 des Tests
