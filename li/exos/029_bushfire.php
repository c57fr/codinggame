<?php

if (getenv('local')) {
  echo '029 - 1D Bush Fire.<hr>';

  echo '<hr>';

  // Reconstitution T1 //
  // $line[] = 'f';
  $line = '...f.f...';
  $line = 'ffff..f..ffffff';
  // $line[] = '.f..f';
  // vdli($line);

    // Sol Pneu84
  for ($l=strlen($line), $c = $j = 0; $j < $l; $j++)
  if ($line[$j] == 'f') {
      $c++;
      $j += 2;
  }
  echo $c . "\n";

  /*
  // Soluce Dwarfie
  for(fscanf(STDIN, "%d", $N); 0 < $N; $N--) {
    $line = preg_match_all("/f.{2}/",trim(fgets(STDIN))."..",$m);
    echo count($m[0]),"\n";
  }
  */

  /*
  $b = $line[1];
  echo strlen($line[1]);

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
  */
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
