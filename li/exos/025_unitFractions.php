Exo 025: Unit Fractions.<hr>
<?php

// Reconstitution T1
$n  = 2;
$ds = [1, 2];

// Reconstitution T2
// $n  = 12;
// $ds = [1, 3, 6, 12];

// Reconstitution T3

foreach ($ds as $k => $v) {
  // x >= y
  // $y = $v + $n;
  // $x = ($n + $v) * ($n / $v);
  echo '1/'.$n.' = 1/'.(($n + $v) * ($n / $v)).' + 1/'.($v + $n).' <br>';
}

// https://www.codingame.com/ide/puzzle/create-the-longest-sequence-of-1s
//##################################################################
// Solution validée dans codding :
