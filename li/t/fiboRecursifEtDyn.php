<?php

$n    = 20;
$plur = ($n) ? 's' : '';
echo '<h2>'.$n.' premier'.$plur.' terme'.$plur.' de la suite de Fibonacci :'.'</h2>';

echo '<h3>De façon récursive:</h3>';

$deb  = microtime(1);
$fibR = [];
$iter = 0;
for ($i = 0; $i < $n; ++$i) {
  $fibR[] = number_format(fiboR($i), 0, ',', ' ');
}
$fin = microtime(1);
// vdli($fibR);
echo implode(', ', $fibR);
echo '<br><br><strong>'.nf($iter).'</strong> itérations en <strong>'.round($fin - $deb, 1).' s </strong><hr>';

function fiboR($n) // Fibo Récursive
{
  global $iter;
  ++$iter;

  return ($n < 2) ? $n : fiboR($n - 1) + fiboR($n - 2);
}

// ############################################################################

echo '<h3>De façon dynamique par récursivité:</h3><p>Forme récursive "Top down" dite de mémoïsation</p>';

$deb   = microtime(1);
$fibDR = [];
$iter  = 0;
$fibs  = []; // Les valeurs calculées sont stockées
for ($i = 0; $i < $n; ++$i) {
  $fibDR[] = number_format(DPTDfiboR($i, $fibs), 0, ',', ' ');
}
$fin = microtime(1);

echo implode(', ', $fibDR);
echo '<br><br><strong>'.nf($iter).'</strong> itérations en <strong>'.round($fin - $deb, 1).' s </strong><hr>';

function DPTDfiboR($n, $fibs) // Dynamic Programation Top Down Fibo Récursive
{
  global $fibs,$iter;
  ++$iter;
  if ($n < 2) {
    $fibs[$n] = $n;

    return $n;
  }
  if (array_key_exists($n, $fibs)) {
    return $fibs[$n];
  }
  $fibs[$n] = DPTDfiboR($n - 1, $fibs) + DPTDfiboR($n - 2, $fibs);

  return $fibs[$n];
}

// ############################################################################

// 2fix Fibo Dynamique par itération'
echo '<h3>De façon dynamique par itération:</h3><p>forme itérative "Bottom Up"</p>';
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