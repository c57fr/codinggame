<?php
// 
$n    = 15;
$plur = ($n) ? 's' : '';
echo '<h2>'.$n.' premier'.$plur.' terme'.$plur.' de la suite de Fibonacci :'.'</h2>';

echo '<h3>De façon récursive:</h3>';
$fibR = [];

$deb  = microtime(1);
for ($i = 0; $i < $n; ++$i) {
  $fibR[] = number_format(fiboR($i), 0, ',', ' ');
}
$fin = microtime(1);
// vdli($fibR);
echo implode(', ', $fibR);
echo '<br><br>Chrono: <strong>'.round($fin - $deb, 1).' s </strong><hr>';

function fiboR($n) // Fibo Récursive
{
  return ($n < 2) ? $n : fiboR($n - 1) + fiboR($n - 2);
}

// ############################################################################



echo '<h3>De façon dynamique par récursivité:</h3><p>Forme récursive "Top down" dite de mémoïsation</p>';
$fibDR = [];

$deb  = microtime(1);
for ($i = 0; $i < $n; ++$i) {
  $fibDR[] = number_format(DPTDfiboR($i), 0, ',', ' ');
}
$fin = microtime(1);

echo implode(', ', $fibDR);
echo '<br><br>Chrono: <strong>'.round($fin - $deb, 1).' s </strong><hr>';

function DPTDfiboR($n) // Dynamic Programation Top Down Fibo Récurve
{
  return ($n < 2) ? $n : fiboR($n - 1) + fiboR($n - 2);
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
  $action = ($ii ?? 0) ? ('compté jusqu\'à <strong>'.number_format($ii, 0, ',', ' ').'</strong> en') : 'attendu pendant ';
  echo 'Test Chrono: G '.$action.' <strong>'.round($fin - $dev, 1).' s </strong>!<hr>';
}