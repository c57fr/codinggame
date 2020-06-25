<link rel="stylesheet" href="./exos/021_ve_style.css">
Exo 022: Pikaptcha Ep1.<hr>
<?php

// $a[1]='lionel';
// echo $a[-1] ?? 'no';

// exit;
// Reconstitution T1
$w       = 5;
$h       = 3;
$lines[] = '0000#';
$lines[] = '#0#00';
$lines[] = '00#7#';
vdli($lines);

// echo $ch = explode(implode('', $lines), '');
// echo $ch = implode('', $lines);
vdli($a = str_split(implode('', $lines)));
// echo $ch = str_repeat('#', $w + 3).implode('##', $lines).str_repeat('#', $w + 3);
echo '<hr>';

echo(($a[4] ?? '#') !== '#') + 3;

echo '<hr>';
// vdli($ch);

// exit;
// for ($i = 0; $i < $h + 2; ++$i) {
//   for ($j = 0; $j < $j + 2; ++$j) {
//     // echo $j.' '.$i.' ';
//     echo $j * $i + $i.' | ';
//   }
//   echo '<br>';
// }

for ($l = $w * $h, $i = 0; $i < $l; ++$i) {
  echo  (('#' !== $a[$i]) ?
  (($a[$i - 1] ?? '#') !== '#') +
  (($a[$i + 1] ?? '#') !== '#') +
  (($a[$i - $w] ?? '#') !== '#') +
  (($a[$i + $w] ?? '#') !== '#')
   : '#').
   ((($i+1)%$w)?'':'<br>'); // "\n"
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
