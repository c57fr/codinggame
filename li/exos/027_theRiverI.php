<?php

if (getenv('local')) {
  echo '027 - The River I.<hr>';

  // Reconstitution T1
  $r1 = '32';
  $r2 = '47';

  // var_dump($r1);
  // var_dump((string) $r2);
  // exit;
  // Reconstitution T2

  // Reconstitution T3

  while ($r1 !== (int) $r2) {
    $v = $r1 < $r2 ? 'r1' : 'r2';
    ${$v} += array_sum(str_split((string) ${$v}));
  }

  echo $r1;

/*
  function nxt($n)
  {
    // $n = (string) $n;
    for ($sum = 0, $l = strlen($n), $i = 0; $i < $l; ++$i) {
      $sum += (int) $n[$i];
    }

    return $n + $sum;
  }

  $a = [$r1, $r2];

  while ($a[0] !== $a[1]) {
    sort($a);
    var_dump($a);
    echo($a[0] = (string) nxt($a[0])).'<hr>';
  }
  echo $a[0]."\n";

// echo $a.' '.$b.' '.($a <=> $b).'<br>';
  // $mn = min($a, $b);

  // echo nxt($mn);

/*
$n = 123456;
function nxt($n)
{
  return $n + sumd($n);
}

$t = 21;
while ($t--) {
  $deb = microtime(true);
  $i   = 7e5;
  for ($i = 7e4; $i; --$i) {
    $sum = sumd($n);
  }
  echo  $n.' '.$sum.' '.nxt($n).' '.chrono($deb, 1).'<hr>';
  // sleep(1);
}
*/
}

// https://www.codingame.com/training/easy/the-river-i-
//##################################################################
// https://github.com/c57fr/codinggame

// Solution validée dans codding :
else {
  fscanf(STDIN, '%d', $r1);
  fscanf(STDIN, '%d', $r2);
  error_log(var_export($r1.' '.$r2, true));

  function nxt($n)
  {
    for ($sum = 0, $l = strlen($n), $i = 0; $i < $l; ++$i) {
      $sum += (int) $n[$i];
    }

    return $n + $sum;
  }

  $a = [$r1, $r2];

  do {
    sort($a);
    $a[0] = (string) nxt($a[0]);
  } while ($a[0] !== (string) $a[1]);
  echo $a[0]."\n";
}
