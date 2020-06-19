<?php

$ve['best'] = function ($A1 = 0, $N = 7) {
  $m = [$A1, 1];
  $a = [];

  for ($i = 1; $i < $N + 1; ++$i) {
    $der = $m[0];
    if (array_key_exists($der, $a)) {
      $n = $i - $a[$der];
    } else {
      $n = 0;
    }
    $a[$m[0]] = $m[1];
    $m        = [$n, $i + 1];
    $seq[]    = $der;
  }

  $a = array_flip($a);
  ksort($a);

  return $seq;
};
