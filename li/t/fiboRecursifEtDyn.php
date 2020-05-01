<?php

testChrono(0); // Si arg (Ex.: 1), compte au lieu d\'attendre.

$n    = 25;
$plur = ($n) ? 's' : '';
echo '<strong>'.$n.'</strong> premier'.$plur.' terme'.$plur.' de la suite de <strong>Fibonacci</strong> :'.'<br><br>';

$fibR = [];
$dev  = microtime(1);
for ($i = 0; $i < $n; ++$i) {
  $fibR[] = number_format(fiboR($i), 0, ',', ' ');
}
$fin = microtime(1);
echo implode(', ', $fibR);
echo '<br><br>Chrono: <strong>'.round($fin - $dev, 1).' s </strong><hr>';

// 2fix Fibo Récursif
function fiboR($n)
{
  return ($n < 2) ? $n : fiboR($n - 1) + fiboR($n - 2);
}

// 2fix Fibo Dynamique par récursivité

// 2fix Fibo Dynamique par itérationé' .

// ################################################################################
//      https://www.supinfo.com/cours/2ADS/chapitres/05-programmation-dynamique
// ################################################################################

function testChrono($action = 0)
{
  // Test du Chrono

  $dev = microtime(1);
  if ($action) {
    for ($i = 1e6, $ii = $i; --$i;) { // 1e7: Env. 2 s, 1e8: 20 s.
    }
  }
  // Attend pendant un moment
  usleep(1e6); // 1e6: Env. 1s.
  $fin = microtime(1);
  // Bilan
  $action = ($ii ?? 0) ? ('compté jusqu\'à <strong>'.number_format($ii, 0, ',', ' ').'</strong> en') : 'attendu pendant ';
  echo 'Test Chrono: G '.$action.' <strong>'.round($fin - $dev, 1).' s </strong>!<hr>';
}