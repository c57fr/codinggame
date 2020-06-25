<link rel="stylesheet" href="./exos/021_ve_style.css">
Exo 022: Pikaptcha Ep1.<hr>
<?php

$w = 5;
for ($i = 0; $i < 15; ++$i) {
  // echo $i.' '.((4-$i % $w) * 1).'<br>';
  // echo ((4-$i % $w)) ? '(x)' : 'y<br>'; // x = calcul à drte
  echo (($i-5) % $w) ? '(x)' : 'y'; // x = calcul à gche
  echo ((4-$i % $w)) ? '' : '<br>'; 
}

// $w = 5;
// for ($i = 0; $i < 15; ++$i) {
//   echo $i.' '.((4 === ($i % $w)) * 1).'  ';
//   echo (($i % 4)) ? '(x)' : 'y<br>'; // x = calcul à gche
// }

echo '<hr>';
// exit;
// Reconstitution T1
$w = 5;
$h = 3;
$lines[] = '0000#';
$lines[] = '#0#00';
$lines[] = '00#7#';
// $lines[] = '00000';
// $lines[] = '00000';
// $lines[] = '00000';
vdli($lines);

vdli($a = str_split(implode('', $lines)));
echo '<hr>';

for ($l = $w * $h, $i = 0; $i < $l; ++$i) {
  echo(('#' !== $a[$i]) ?
  (
    ((($i-5) % $w) && (($a[$i - 1] ?? '#')) !== '#') +
    ((4-$i % $w) && (($a[$i + 1] ?? '#')) !== '#') +
    (($a[$i - $w] ?? '#') !== '#') +
    (($a[$i + $w] ?? '#') !== '#')
  )
   : '#').
   ((($i + 1) % $w) ? '' : '<br>'); // "\n"
}

// 1322#
// #2#31
// 12#1#

// https://www.codingame.com/training/easy/detective-pikaptcha-ep1
//##################################################################
/*

Solution validée dans codding : // La meilleure de ci-dessus



<?php


*/
