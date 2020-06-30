<?php

if (getenv('local')) {
  echo '029 - 1D Bush Fire.<hr>';

  $l = 10;
  // echo 'Max fire: '.((int) ($l / 3)).' + ';
  // echo 'Max fire: '.(($l % 3 <=> 0)).' = ';
  echo 'Max fire: '.((int) ($l / 3) + ($l % 3 <=> 0)).'<br>';

// Reconstitution T1 //
}
//*** https://www.codingame.com/ide/puzzle/1d-bush-fire
//##################################################################
// https://github.com/c57fr/codinggame

// Solution validée dans codding :

else {
  fscanf(STDIN, '%d', $N);
  error_log(var_export($N, true));
  for ($i = 0; $i < $N; ++$i) {
    $line = stream_get_line(STDIN, 255 + 1, "\n");
    error_log(var_export($line, true));
  }
  for ($i = 0; $i < $N; ++$i) {
    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo "answer\n";
  }
}
