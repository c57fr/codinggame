<?php

if (getenv('local')) {
  echo '030 - The River II.<hr>';

  // Reconstitution T //
$r1 = 80; // Y
$r1 = 13; // Y
$r1 = 20; // Y

$nxt = $r1 + array_sum(str_split((string) $r1));
  vdli($nxt);
  // recherche précédent
  for ($i = $r1; $i > 0; --$i) {
    echo $i.' '.($i + array_sum(str_split((string) $i))).'<br>';
  }
}
//*** https://www.codingame.com/training/easy/the-river-ii-
//##################################################################
// https://github.com/c57fr/codinggame

// Solution validée dans coding :

else {
  // 1 ≤ r1 < 100 000
  fscanf(STDIN, '%d', $r1);
  error_log(var_export($r1, true));

  echo "YES\n";
}
