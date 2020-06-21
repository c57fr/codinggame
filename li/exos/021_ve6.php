<?php

$methode[6] = 'Otpv: Une boucle';

function ve6($An = 7, $N = 11) // Tableau [N, index] avec yield
{
  $m_ini = memory_get_usage();
  foreach (range(1, $N - 1) as $ii) {
    list($last[$An], $An) = [$ii, isset($last[$An]) ?
      $ii - $last[$An] :
      0, ];
  }
  // echo $An;
  $m_fin = memory_get_usage();
  // $a[]   = mf($m_fin - $m_ini);
  return [$An, mf($m_fin - $m_ini)];
}

/*
fscanf(STDIN, "%d", $An);
fscanf(STDIN, "%d", $N);
foreach (range(1,$N-1) as $ii) [ $last[$An], $An ] = [ $ii, isset($last[$An]) ? $ii - $last[$An] : 0 ];
echo $An;
*/

// 2do Organigramme

// 2do capture résultat final + lien dépôt dans soluce finale dans cdg (avec indiqué soluce pnu + otpv)
