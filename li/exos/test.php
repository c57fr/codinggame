<?php

function compte()
{
  $i = 1;
  while (true) {
    yield $i++;
  }
}

foreach (compte() as $v) {
  echo $v.' ';
  if ($v > 9) {
    break;
  }
}

/*
function ve4_1() // Tableau [N, index]
{
  $n    = 0;
  $seen = [7 => 0];
  $val  = 0;
  while (true) {
    yield $val;
    if (array_key_exists($val, $seen)) {
      $val = $seen[$val];
    } else {
      $val        = 0;
      $seen[$val] = $n;
      ++$n;
    }
  }
}

$n = 7;
foreach (ve4_1() as $v) {
  echo $v.' ';
  --$n;
  if ($n >= 0) {
    break; // infinite loop prevent
  }
}
*/
