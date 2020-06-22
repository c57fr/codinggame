<?php

// 2do dico des indexes
$methode[7] = 'Dico - Scal. vars';

function ve7($An = 7, $N = 11) // range
{
  $deb   = microtime(true);
  $m_ini = memory_get_usage();
  foreach (range(1, $N - 1) as $ii) {
    list($last[$An], $An) = [$ii, isset($last[$An]) ?
      $ii - $last[$An] :
      0, ];
  }
  // echo $An.'<br>';
  $m_fin = memory_get_usage();
  $chg   = mf($m_fin - $m_ini);

  // return [$An, $chg, chrono($deb, 1)];
  return [$An, $chg];
}

/*
fscanf(STDIN, "%d", $An);
fscanf(STDIN, "%d", $N);
foreach (range(1,$N-1) as $ii) [ $last[$An], $An ] = [ $ii, isset($last[$An]) ? $ii - $last[$An] : 0 ];
echo $An;
*/

// 2do capture résultat final + lien dépôt dans soluce finale dans cdg (avec indiqué soluce pnu + otpv)

// Bilan:
// ++ : Le + rapide (1900 x + rapide que ve1 et 4 x + que ve3 - 70 M en moins de 2')
// -- : Léger
// ==>: Env. 1.5 X + rapide que ve6, mais reste gourmande si $N très très élevé et donc limité / charge mémoire ( ex. >1e8 )

// https://www.codingame.com/training/easy/van-ecks-sequence

//##################################################################
/*

Solution dans codding : Idem code local

<?php

function ve7cdg($An = 7, $N = 11) // range
{
  $deb   = microtime(true);
  $m_ini = memory_get_usage();
  foreach (range(1, $N - 1) as $ii) {
    list($last[$An], $An) = [$ii, isset($last[$An]) ?
      $ii - $last[$An] :
      0, ];
  }
  // echo $An.'<br>';
  $m_fin = memory_get_usage();
  $chg   = mf($m_fin - $m_ini);

  // return [$An, $chg, chrono($deb, 1)];
  return $An;
}

echo ve7cdg($A1, $N)."\n";

// => Pass  des Tests!; 6/6
*/
