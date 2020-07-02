<?php

if (getenv('local')) {
  echo '031 - Happy Numbers.<hr>';

  // Reconstitution T //
  function carre($v)
  {
    return $v ** 2;
  }
  $a = $x = 2445678951235896;
  vdli($a);
  $res = [1 => ':)', 4 => ':('];
  while (4 !== $a && 1 !== $a) {
    $a = array_sum(array_map(function ($v) {return $v ** 2; }, str_split($a)));
  }
  echo $x.' '.$res[$a]."\n";
}
//*** https://www.codingame.com/training/easy/happy-numbers
//##################################################################
// https://github.com/c57fr/codinggame
// Dév. local: http://codinggame/li

// Solution validée dans coding :

else {
  fscanf(STDIN, '%d', $N);
  error_log(var_export($N, true));
  for ($i = 0; $i < $N; ++$i) {
    $n = $x = stream_get_line(STDIN, 128 + 1, "\n");
    error_log(var_export($x, true));

    $res = [1 => ':)', 4 => ':('];
    while (4 !== $n && 1 !== $n) {
      $n = array_sum(array_map(function ($v) {return $v ** 2; }, str_split($n)));
    }
    echo $x.' '.$res[$n]."\n";
  }
}
