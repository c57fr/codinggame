<?php

if (getenv('local')) {
  echo '030 - The River II.<hr>';

// Reconstitution T1 //
}
//*** https://www.codingame.com/training/easy/the-river-ii-
//##################################################################
// https://github.com/c57fr/codinggame

// Solution validée dans coding :

else {
  // 1 ≤ r1 < 100 000
  fscanf(STDIN, '%d', $r1);
  error_log(var_export($r1, true));

  echo "YES|NO\n";
}
