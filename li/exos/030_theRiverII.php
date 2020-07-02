<?php

if (getenv('local')) {
  echo '030 - The River II.<hr>';

  // Reconstitution T //

  $r1 = 20; // N
  $r1 = 13; // Y
  $r1 = 80; // Y
  $r1 = 117; // Y (99 & 108)
  $r1 = 1e6; // Y

  // NB: so the biggest step any number below your checking number is: amount_of_checks: ((first_digit-1)+(length_of_number-1))*9

  // echo $r1.' ('.strlen($r1).')<hr>';

  $f = ['deuk', 'sabrim', 'dwarfie', 'otpv', 'gc7'];
  // Deuk : NO20000  - ≃ 00:17:14 +
  // Sabrim : NO20000  - ≃ 00:20:01 +
  // Dwarfie : YES19999  - ≃ 00:37:14 +
  // Otpv : YES    28  - ≃ 00:00:02 +
  // Gc7 : YES    28  - ≃ 00:00:02 +
  
  $f = ['otpv', 'gc7'];
  // gc7

  $deuk = function ($r1) {
    $previous = $n = 0;
    do {
      ++$n;
      $diff = $r1 - (++$previous);
    } while (array_sum(str_split((string) $previous)) !== $diff && $previous < $r1);

    return [[true => 'YES', false => 'NO'][$previous < $r1], $n];
  };

  $sabrim = function ($r1) {
    $n = 0;
    for ($i = $r1; $i > 0; --$i) {
      ++$n;
      if (array_sum(str_split($r1 - $i)) === $i) {
        // exit('YES');
        return ['YES', $n];
      }
    }
    // echo('NO');
    return ['NO', $n];
  };

  // in_array($r1 = fgets(STDIN), array_map(function ($r) { return $r + array_sum(str_split($r)); }, range(1, $r1)), true) ? 'YES' : 'NO';
  $dwarfie = function ($r1) {
    return [
      in_array($r1, array_map(function ($r) {
        return $r + array_sum(str_split($r));
      }, range(1, $r1)), true) ? 'YES' : 'NO', ($r1 - 1), ];
  };

  $otpv = function ($r1) {
    $rK = $r1;
    $n  = 1;
    while ($n++ && $rK-- && !($meet = $rK + array_sum(str_split($rK)) === $r1) && $n < (strlen($r1) * 9));

    return [$meet ? 'YES' : 'NO', ($n - 1)];
  };

  $gc7 = function ($r1) {
    for ($i = $r1 - 1, $j = 0; $j < (strlen($r1) * 9); --$i) {
      ++$j;
      // echo $i.' '.($i + array_sum(str_split((string) $i))).'<br>';
      if ($r1 === $i + array_sum(str_split((string) $i))) {
        $fd = 'YES';

        break;
      }
    }

    return [$fd ?? 'NO', $j];
  };

  $t=0;
  foreach ($f as $k => $v) {
    $deb = microtime(true);
    for ($k=1e4; $k<2e4; $k++){
      ${$v}($k);
      // $t+=chrono($deb, 1, 1);
    }
      echo '<strong>'.ucwords($v).'</strong> : '.${$v}($k)[0].vf(${$v}($k)[1], 4).' - '.chrono($deb).'<hr>';
  }
}
//*** https://www.codingame.com/training/easy/the-river-ii-
//##################################################################
// https://github.com/c57fr/codinggame
// Dép local: http://codinggame/li

// Solution validée dans coding :

else {
  // 1 ≤ r1 < 100 000
  fscanf(STDIN, '%d', $r1);
  error_log(var_export($r1, true));

  for ($i = $r1 - 1, $j = 0; $j < (strlen($r1) * 9); --$i) {
    ++$j;
    if ($r1 === $i + array_sum(str_split((string) $i))) {
      $fd = 'YES';

      break;
    }
  }
  echo($fd ?? 'NO')."\n";

  /*
  // otpv
    fscanf(STDIN, "%d", $r1);
  $rK = $r1;
  while ($rK-- && !($meet = $rK + array_sum(str_split($rK)) == $r1));
  echo $meet ? 'YES' : 'NO';
  */
}
