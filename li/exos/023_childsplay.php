Exo 023: Child's play.<hr>
<?php

// echo nf(pow(2, 53)); // n max

// exit;
// Reconstitution T1
$w  = 12; $h  = 6; $n  = 987;
// $n  = $ni  = 77;
$ch = <<<'EOD'
...#........
...........#
............
............
..#0........
..........#.
EOD;
// => 7 1

$chAff = str_replace("\r\n", '<br>', $ch);
$ch    = str_replace("\r\n", '', $ch);

$p = strpos($ch, '0'); // Position

$s  = [$p - $w, $p + 1, $p + $w, $p - 1]; // Sens
$vs = 0;

while (--$n) {
  $p = $s[$vs % 4];
  $s = [$p - $w, $p + 1, $p + $w, $p - 1]; // Sens
  $vs += '#' === ($ch[$s[$vs % 4]]);
}
echo ($p%$w+1).' '.intdiv($p, $w)."\n";


// https://www.codingame.com/ide/puzzle/a-childs-play
//##################################################################
// Solution validée dans codding : // La meilleure de ci-dessus
