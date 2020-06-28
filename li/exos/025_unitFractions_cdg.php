<?php

fscanf(STDIN, "%d", $n);

for ($l = $n * 2 + 1, $y = $n + 1; $y < $l; ++$y) {
  $x = $y * $n / ($y - $n);
  if ($x === (int) ($x)) {
    echo '1/'.$n.' = 1/'.$x.' + 1/'.$y."\n";
  }
}


// Soluce Pneu84
/*
fscanf(STDIN, "%d", $n);
$nn = $n * $n;
for ($i = 1; $i <= $n; $i++) if ($nn % $i == 0) echo "1/$n = 1/" . ($n + $nn / $i) . " + 1/" . ($n + $i) . "\n"; 
*/