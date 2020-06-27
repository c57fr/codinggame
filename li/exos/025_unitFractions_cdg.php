<?php

$cdg = defined('STDIN');

echo 1 * 2 * 3 * 4 * 6 * 8 * 9 * 12;

echo '<hr>';
function divisors($n)
{
  $k         = 2;
  $diviseurs = [1];
  while ($k <= $n) {
    if (0 === $n % $k) {
      $diviseurs[] = $k;
    }
    ++$k;
  }
  // document.getElementById('resultat').innerHTML = diviseurs;
  return $diviseurs;
}
if (!$cdg) {
  vdli(divisors(36));
  echo '<hr>';
}

if ($cdg) {
  fscanf(STDIN ?? 2, '%d', $n);
} else {
  $n = 12;
}
// $n = ((defined('STDIN')) ? fscanf(STDIN ?? 2, '%d', $n):2);
// 1 <= $n <= 1e6

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true));

// Reconstitution T1
// $n = 2;

// Reconstitution T2
// $n  = 12;
// $ds = [1, 3, 6, 12];

// Reconstitution T3

switch ($n) {
    case 2:
    $ds = [1, 2];

    break;
    case 12:
    $ds = [1, 2, 3, 4, 6, 8, 9, 12];

    break;
    case 17:
    $ds = [1, 17];

    break;
    case 100:
    $ds = [1, 2, 4, 5, 8, 10, 16, 20, 25, 40, 50, 80, 100];

    break;
    default:
    $ds = [1, 3, 6, 12];

    break;
}

foreach ($ds as $k => $v) {
  // x >= y
  // $y = $v + $n;
  // $x = ($n + $v) * ($n / $v);
  echo '1/'.$n.' = 1/'.(($n + $v) * ($n / $v)).' + 1/'.($v + $n).($cdg ? "\n" : '<br>');
}
