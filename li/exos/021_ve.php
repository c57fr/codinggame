<?php

// 2do Ici la méthode la plus efficace parmis les 4
$ve[0] = function ($A1 = 0, $N = 7) {
  $a    = array_fill(0, $N, 0);
  $a[0] = $A1;

  for ($n = 0; $n < $N - 1; ++$n) {
    for ($m = $n - 1; $m >= 0; --$m) {
      if ($a[$m] === $a[$n]) {
        $a[$n + 1] = $n - $m;

        break;
      }
    }
  }

  return $a;
};

// 2do Organigramme
