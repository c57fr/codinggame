<?php

fscanf(STDIN, "%d", $n);

for ($l = $n * 2 + 1, $y = $n + 1; $y < $l; ++$y) {
  $x = $y * $n / ($y - $n);
  if ($x === (int) ($x)) {
    echo '1/'.$n.' = 1/'.$x.' + 1/'.$y."\n";
  }
}
