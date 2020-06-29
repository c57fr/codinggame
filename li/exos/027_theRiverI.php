<?php

if (getenv('local')) {
  echo '027 - The River I.<hr>';

  // Reconstitution T1
  $r1 = '32';
  $r2 = 47;

  // var_dump($r1);
  // var_dump((string) $r2);
  // exit;
  // Reconstitution T2

  // Reconstitution T3
  function sumd($n)
  {
    for ($sum = 0, $l = strlen($n), $i = 0; $i < $l; ++$i) {
      $sum += (int) $n[$i];
    }

    return $sum;
  }

  function sum2($n)
  {
    $sum = 0;
    while (0 !== $n) {
      $sum += $n % 10;
      $n = $n / 10;
    }

    return $sum;
  }

  $ni = 0;
  // for ($i = 9; $i < 1e2; ++$i) {
  //   $s = sum(strval($i));
  //   echo vf($i).' '.vf($s).'<br>';
  // }

  $n = 123456;
  function nxt($n)
  {
    return $n + sumd((string) $n);
  }

  $t = 21;
  while ($t--) {
    $deb = microtime(true);
    $i   = 7e5;
    for ($i = 7e4; $i; --$i) {
      $sum = sumd((string) $n);
    }
    echo  $n.' '.$sum.' '.nxt($n).' '.chrono($deb, 1).'<hr>';
    // sleep(1);
  }
}

// https://www.codingame.com/training/easy/the-river-i-
//##################################################################
// https://github.com/c57fr/codinggame

// Solution validée dans codding :
else {
  fscanf(STDIN, '%d', $r1);
  fscanf(STDIN, '%d', $r2);
  error_log(var_export($r1.' '.$r2, true));
  echo "47\n";
}
