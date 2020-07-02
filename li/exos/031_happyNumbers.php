<?php

if (getenv('local')) {
  echo '031 - Happy Numbers.<hr>';

  // Reconstitution T //
  function carre($v)
  {
    return $v ** 2;
  }
  $a = $N = 24456789512358965;
  vdli($a);
  $res = [1 => ':)', 4 => ':('];
  while (4 !== $a && 1 !== $a) {
    $a = array_sum(array_map(function ($v) {return $v ** 2; }, str_split($a)));
  }
  echo $N.' '.$res[$a]."\n";
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
    $a = $x;

    $res = [1 => ':)', 4 => ':('];
    while (4 !== $a && 1 !== $a) {
      $a = array_sum(array_map(function ($v) {return $v ** 2; }, str_split($a)));
    }
    echo $x.' '.$res[$a]."\n";
  }
}
