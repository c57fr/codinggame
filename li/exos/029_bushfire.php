<?php

if (getenv('local')) {
  echo '029 - 1D Bush Fire.<hr>';

  echo '<hr>';
  $l = 10;
  // echo 'Max fire: '.((int) ($l / 3)).' + ';
  // echo 'Max fire: '.(($l % 3 <=> 0)).' = ';
  // echo 'Max fire: '.((int) ($l / 3) + ($l % 3 <=> 0)).'<br>';

  // Reconstitution T1 //
  // $line[] = 'f';
  $line = '...f.f...';
  // $line[] = 'ffffffffff';
  // $line[] = '.f..f';
  // vdli($line);

  for ($c = $j = 0; $j < strlen($line) ; $j++)
  if ($line[$j] == 'f')
  {
      $c++;
      $j += 2;
  }
echo $c . "\n";


  // $b = str_split($line[1]);
  $b = $line[1];
  echo strlen($line[1]);
  // echo count($b);
  vdli($b);

  function fire($i, $b)
  {
    $b[$i] = $b[$i + 1] = $b[$i + 2] = 0;

    return $b;
  }

  $n = 0;
  for ($l = strlen($b) - 3,$i = 0; $i < $l; ++$i) {
    // echo ($b[$i-1]=='f') ? 'X':$b[$i];
    echo $i.' ';
    if ('f' === $b[$i]) {
      vdli($i);
      $b = fire($i, $b);
      $i += 2;
      ++$n;
    }
  }
  if ('f' === ($b[$l] ?? 0) || 'f' === ($b[$l + 1] ?? 0) || 'f' === $b[$l + 2]) {
    $b = fire($i, $b);
    ++$n;
  }

  vdli($i);
  vdli($b);
  echo $n;
}
//*** https://www.codingame.com/ide/puzzle/1d-bush-fire
//##################################################################
// https://github.com/c57fr/codinggame

// Solution validée dans codding :

else {
  fscanf(STDIN, '%d', $N);
  error_log(var_export($N, true));

  function fireB2($i, $b)
  {
    $b[$i] = $b[$i + 1] = $b[$i + 2] = 0;

    return $b;
  }

  for ($k = 0; $k < $N; ++$k) {
    $b = stream_get_line(STDIN, 255 + 1, "\n");
    error_log(var_export($b, true));

    $n = 0;
    for ($l = strlen($b) - 3,$i = 0; $i < $l; ++$i) {
      if ('f' === $b[$i]) {
        $b = fireB2($i, $b);
        $i += 2;
        ++$n;
      }
    }
    if ('f' === ($b[$l] ?? 0) || 'f' === ($b[$l + 1] ?? 0) || 'f' === $b[$l + 2]) {
      $b = fireB2($i, $b);
      ++$n;
    }
    echo $n."\n";
  }
}
