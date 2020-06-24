<link rel="stylesheet" href="./exos/021_ve_style.css">
Exo 022: Pikaptcha Ep1.<hr>
<?php

// // $a[1]=123;
// echo $a[1] ?? 'no';

// exit;
// Reconstitution T1
$w       = 5;
$h       = 3;
$lines[] = '0000#';
$lines[] = '#0#00';
$lines[] = '00#7#';
vdli($lines);

echo $ch = str_repeat('#', $w + 3).implode('##', $lines).str_repeat('#', $w + 3);
echo '<hr>';

// for ($i = 0; $i < $h + 2; ++$i) {
//   for ($j = 0; $j < $j + 2; ++$j) {
//     // echo $j.' '.$i.' ';
//     echo $j * $i + $i.' | ';
//   }
//   echo '<br>';
// }
// echo '<hr>';

for ($l = strlen($ch) - $w - 2, $i = $w + 3; $i < $l; ++$i) {
  echo ('#' !== $ch[$i]) ?
    (('#' !== $ch[$i - 1]) + ('#' !== $ch[$i + 1]) + ('#' !== $ch[$i - 7]) + ('#' !== $ch[$i + 7])) : '#';
    echo ($i%7) ? '':'<br>';
  // echo $i.' : '.$ch[$i].'<br>';
//   if ('#' !== $ch[$i]) {
//     $ch[$i] = ('#' !== $ch[$i - 1]) + ('#' !== $ch[$i + 1])+ ('#' !== $ch[$i -7])+ ('#' !== $ch[$i + 7]);
//     echo $i.' : '.$ch[$i].'<br>';
}

vdli(str_split($ch, 7));

// 1322#
// #2#31
// 12#1#

// https://www.codingame.com/training/easy/detective-pikaptcha-ep1
//##################################################################
/*

Solution validée dans codding : // La meilleure de ci-dessus



<?php


*/
