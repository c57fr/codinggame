<?php

$methode[5] = 'Vars dynamiques';

$NN = $N;

function ve5($A1 = 0, $N = 7) // Méthode Dictionnaire
{
  $m_ini = memory_get_usage();
  $n     = $i     = $A1     = 7;

  while (--$N) {
    $v = $n;
    // echo $v.' ';
    $n    = isset(${$n}) ? $i - ${$n} : 0;
    ${$v} = $i++;
  }
  $a     = [$n];
  $m_fin = memory_get_usage();
  $a[]   = mf($m_fin - $m_ini);

  return $a;
}

/*

$t = $p = trim(fgets(STDIN));
fscanf(STDIN, "%d", $N);
while (--$N)
{
    $k = $t;
    $t = isset($$t) ? $p - $$t : 0;
    $$k = $p++;
}
echo("$t\n");

*/

// Bilan:
// ++ : Le + rapide (5 x + que ve3 - 70 M en moins de 2')
// -- : Léger + lourd ( 1.5 x) en charge mémoire que ve3
// ==>: Env. 5 X + rapide que ve3, mais reste gourmande si $N très très élevé et donc limité / charge mémoire ( ex. >1e7 )

// https://www.codingame.com/training/easy/van-ecks-sequence

//##################################################################
/*

Solution dans codding : Idem code local

<?php

...

// => Pass  des Tests

*/

// 2do Organigramme
