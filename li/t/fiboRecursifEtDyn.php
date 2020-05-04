<?php

$nf   = 27; // 25
$plur = ($nf) ? 's' : '';

echo '<h2>'.$nf.' premier'.$plur.' terme'.$plur.' de la suite de Fibonacci :'.'</h2>';

$deb = microtime(1);
for ($i = 0; $i < $nf; ++$i) {
//  $fibR[] = nf(fiboR($i), 0);
}
$fin = microtime(1);

// echo '<h3>De façon récursive:</h3>'.implode(', ', $fibR).'<br><br>Chrono: <strong>'.nf($fin - $deb, 2).' s </strong><hr>';

function fiboR($n) // Fibo Récursive
{
  global $iter;
  ++$iter;

  return ($n < 2) ? $n : fiboR($n - 1) + fiboR($n - 2);
}

// ############################################################################

$fs    = [];
$deb   = microtime(1);
$fibDR = DPTDfiboR($nf);
$fin   = microtime(1);
exit;
echo '<h3>De façon dynamique par récursivité:</h3><p>Forme récursive "Top down" dite de mémoïsation</p>'.implode(', ', DPTDfiboR($nf)).'<br><br>Chrono: <strong>'.nf($fin - $deb, 2).' s </strong><hr>';

function DPTDfiboR($n) // Dynamic Programation Top Down Fibo Récurve
{
  $f = [0, 1];
  if ($n > 1) {
    for ($i = 2; $i < $n + 1; ++$i) {
      $f[$i] = fiboR($i - 1) + fiboR($i - 2);
    }
  }

  return $f;
}

// ############################################################################

// 2fix Fibo Dynamique par itération'
echo '<h3>De façon dynamique par itération:</h3><p>Forme itérative "Bottom Up"</p>';

$fibo = function ($n, $f = [0, 1]) {
  if ($n > 1) {
    for ($i = 2; $i < $n + 1; ++$i) {
      $f[$i] = $f[$i - 1] + $f[$i - 2];
    }
  }

  return $f;
};
echo implode(', ', $fibo(25));
// echo implode(', ', $fibo(1e6));
// $fibo(1e6);
/*
var n, rep, f;

var fibo = function (n, f = [0, 1]) {
  if (n > 1)
  for (i = 2; i < n + 1; i++) {
  f[i] = f[i - 1] + f[i - 2];
  }
  //  return i;
  myP.innerHTML = rep;
  return f[n];
};
var m;
//rep = fibo(14760); // maxi 1476
rep = fibo(1009);
*/

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
  $action = ($ii ?? 0) ? ('compté jusqu\'à <strong>'.nf($ii, 0, ',', ' ').'</strong> en') : 'attendu pendant ';
  echo 'Test Chrono: G '.$action.' <strong>'.round($fin - $dev, 1).' s </strong>!<hr>';
}function nf($n, $dec = 0)
{
  return number_format($n, $dec, ',', ' ');
}
function nf($n, $dec = 2)
{
  return number_format($n, $dec, ',', ' ');
}