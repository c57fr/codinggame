<?php

if (getenv('local')) {
  echo '031 - Happy Numbers.<hr>';

// Reconstitution T //
}
//*** https://www.codingame.com/training/easy/happy-numbers
//##################################################################
// https://github.com/c57fr/codinggame
// Dép local: http://codinggame/li

// Solution validée dans coding :

else {
  fscanf(STDIN, '%d', $N);
  error_log(var_export($N, true));
  for ($i = 0; $i < $N; ++$i) {
    $x = stream_get_line(STDIN, 128 + 1, "\n");
    error_log(var_export($x, true));
  }
  echo "23 :)\n";
}
