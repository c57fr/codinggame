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

  // Recherche précédent
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
  Soluce otpv
  // 2do Benchmark comparatif avec soluce 1 
  fscanf(STDIN, "%d", $r1);
  $rK = $r1;
  while ($rK-- && !($meet = $rK + array_sum(str_split($rK)) == $r1));
  echo $meet ? 'YES' : 'NO';
  */
}
