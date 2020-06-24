<link rel="stylesheet" href="./exos/021_ve_style.css">
Exo 022: Pikaptcha Ep1.<br>
<?php

// Reconstitution T1
$w       = 5;
$h       = 3;
$lines[] = '0000#';
$lines[] = '#0#00';
$lines[] = '00#0#';
vdli($lines);
$ch = implode('', $lines);

for ($l = $w * $h, $i = 0; $i < $l; ++$i) {
  echo $i.' : '.$ch[$i].' ';
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
