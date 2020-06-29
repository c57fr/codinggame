<?php

if (getenv('local')) {
  echo '029 - 1D Bush Fire.<hr>';

// Reconstitution T1 //
}
// https://www.codingame.com/ide/puzzle/1d-bush-fire
//##################################################################
// https://github.com/c57fr/codinggame

// Solution validée dans codding :

else {
  fscanf(STDIN, '%d', $N);
  for ($i = 0; $i < $N; ++$i) {
    $line = stream_get_line(STDIN, 255 + 1, "\n");
  }
  for ($i = 0; $i < $N; ++$i) {
    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo "answer\n";
  }
}
