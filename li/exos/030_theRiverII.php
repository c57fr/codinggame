<?php

if (getenv('local')) {
  echo '030 - The River II.<hr>';

  // Reconstitution T //

  $r1 = 20; // N
  $r1 = 117; // Y (99 & 108)
  $r1 = 80; // Y
  $r1 = 13; // Y

  // NB: so the biggest step any number below your checking number is: amount_of_checks: ((first_digit-1)+(length_of_number-1))*9

  echo $r1.' ('.strlen($r1).')';

  echo '<hr>';
  // 2do Benchmark de 10 itérations (Non comptées les 3 premières - Que chrono) comparatif avec soluce 1
  $f = ['deuk', 'sabrim', 'dwarfie', 'otpv', 'gc7'];
  // gc7

  $deuk = function ($r1) {
    $previous = 0;
    do {
      $diff = $r1 - (++$previous);
    } while (array_sum(str_split((string) $previous)) !== $diff && $previous < $r1);
    echo
    [
      true  => 'YES',
      false => 'NO',
    ][$previous < $r1]
    ;
  };

  $sabrim = function ($r1) {
    for ($i = $r1; $i > 0; --$i) {
      if (array_sum(str_split($r1 - $i)) === $i) {
        // exit('YES');
        return 'YES';
      }
    }
    // echo('NO');
    return 'NO';
  };

  // in_array($r1 = fgets(STDIN), array_map(function ($r) { return $r + array_sum(str_split($r)); }, range(1, $r1)), true) ? 'YES' : 'NO';
  $dwarfie = function ($r1) {
    in_array($r1, array_map(function ($r) { return $r + array_sum(str_split($r)); }, range(1, $r1)), true) ? 'YES' : 'NO';
  };

  $otpv = function ($r1) {
    $rK = $r1;
    while ($rK-- && !($meet = $rK + array_sum(str_split($rK)) === $r1));
    echo $meet ? 'YES' : 'NO';

    return 'Y/N<br>';
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
    echo($fd ?? 'NO')."\n";

    return 'Y/N<br>';
  };
  foreach ($f as $k => $v) {
    echo ${$v}($r1);
  }

  for ($i = $r1 - 1, $j = 0; $j < (strlen($r1) * 9); --$i) {
    ++$j;
    // echo $i.' '.($i + array_sum(str_split((string) $i))).'<br>';
    if ($r1 === $i + array_sum(str_split((string) $i))) {
      $fd = 'YES';

      break;
    }
  }
  echo($fd ?? 'NO')."\n";
}
//*** https://www.codingame.com/training/easy/the-river-ii-
//##################################################################
// https://github.com/c57fr/codinggame

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