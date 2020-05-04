<?php

$depGlobal = microtime(1);
$iter      = 0;
// $vaft           = [1, 2, 3]; // 1 = Récursive - 2 : DPTDR  - 3 : BU
// Les 3 (n max = 25 pour petite attente - Env. 10 s)
// $vaft           = [1, 2, 3]; // 1 = Récursive - 2 : DPTDR  - 3 : BU
// $n   = 25; // 25

$n    = 30; // 30 - Env 2'
$vaft = [1, 2, 3]; // 1 = Récursive - 2 : DPTDR  - 3 : BU

// Formes récursives: Attention:
// Temps exécution simple récursivité: Temps d'exécution env. 3H pour n = 40 !
// Limite des nested de php.ini à 256 // Max ici: 252

// $n    = 100; // 100 - Env
// $vaft = [2, 3]; // 1 = Récursive - 2 : DPTDR  - 3 : BU

$plur    = ($n > 1) ? 's' : '';
$premier = ($n > 1) ? ' premier'.$plur : '';

echo '<h2>'.$n.$premier.' terme'.$plur.' de la suite de Fibonacci&nbsp;:'.'</h2><hr>';

// @i ############################################################################
// @i                               Fibo Récursive
// @i ############################################################################

if (in_array(1, $vaft, true)) {
  $deb = microtime(1);
  for ($i = 2; $i < $n; ++$i) {
    $fibR[] = nf(fiboR($i), 0);
  }
  $fin = microtime(1);

  echo '<h3>De façon récursive:</h3><br><br><strong>'.nf($iter).'</strong> itérations en <strong>'.round($fin - $deb, 3).' " </strong><hr>';

  $iter = 0;
}
function fiboR($n) // Fibo Récursive
{
  global $iter;
  ++$iter;

  return ($n < 2) ? $n : fiboR($n - 1) + fiboR($n - 2);
}
// @i ############################################################################
// @i                 Fibo DYNAMIQUE par Récursivité (Top Down)
// @i ############################################################################

if (in_array(2, $vaft, true)) {
  $deb = microtime(1);
  $fs  = [0, 1];
  if ($n > 1) {
    DPTDfiboR($n - 1, $fs);
  }
  $fs  = array_map('nf', $fs);
  $fin = microtime(1);

  echo '<h3>De façon dynamique par Récursivité:</h3><p>Forme récursive "Top down" dite de mémoïsation</p><strong>'.nf($iter).'</strong> itérations en <strong>'.round($fin - $deb, 3).' " </strong><hr>';

  $iter = 0;
}
function DPTDfiboR($n) // Dynamic Programation Top Down Fibo Récursive
{
  global $fs, $iter;
  ++$iter;

  if (!array_key_exists($n, $fs)) {
    $fs[$n] = DPTDfiboR($n - 1) + DPTDfiboR($n - 2);
  }

  return $fs[$n];
}

// @i ############################################################################
// @i                  Fibo DYNAMIQUE par Itération (Buttom Up)
// @i ############################################################################

if (in_array(3, $vaft, true)) {
  $deb = microtime(1);
  DPBUfibo($n - 1);
  $fs  = array_map('nf', $fs);
  $fin = microtime(1);

  echo '<h3>De façon dynamique par Itération:</h3><p>Forme itérative "Bottom Up"</p><strong>'.$iter.'</strong> itérations en <strong>'.round($fin - $deb, 3).' " </strong><hr>';
}
function DPBUfibo($n, $fs = [0, 1])
{
  global $fs, $iter;

  if ($n > 1) {
    for ($i = 2; $i < $n + 1; ++$i) {
      ++$iter;
      $fs[$i] = $fs[$i - 1] + $fs[$i - 2];
    }
  }

  return $fs;
}

switch ($n) {
  case 0:
  echo 'NULL';
  $fs = [];

  break;
  case 1:
  array_pop($fs);
  // no break
  default:
  // code...
  break;
}

echo 'Temps Global: <strong>'.nf(microtime(1) - $depGlobal, 2).' "</strong><hr>';

if (!$n) {
  array_pop($fs);
}
echo implode(', ', $fs);
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
  echo 'Test Chrono: G '.$action.' <strong>'.round($fin - $dev, 1).'\" </strong>!<hr>';
}

function nf($n, $dec = 0)
{
  return number_format($n, $dec, ',', ' ');
}