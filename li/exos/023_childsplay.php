Exo 023: Child's play.<hr>
<?php

// echo nf(pow(2, 53)); // n max

// $w = 12; $h = 6; $n = 987;
// $p = 41;
// echo($p % $w).' '.intdiv($p, $w)."\n";

// $a = [0, 1, 2, 3, 4, 5];

// vdli($a);
// foreach ($a as $k => $v) {
//   $a[$k] %= 4;
//   echo($k % 4).' ';
// }
// vdli($a);

// exit;
// Reconstitution T1
$w = 12; $h = 6; $n = 987;
// $n  = $ni  = 77;
$ch = <<<'EOD'
...#........
...........#
............
............
..#O........
..........#.
EOD;
// => 7 1

// Reconstitution T2
$w = 12; $h = 8; $n = 1234321;
// $n  = $ni  = 77;
$ch = <<<'EOD'
....#.......
........#...
...........#
...#O.......
...#........
.......#....
...........#
....#.......
EOD;
// => 4 2

/*
'16 x 10 - 12 321 123 212 397'
'...#...###......'
'...............#'
'.#..............'
'...........#....'
'................'
'................'
'..#O............'
'.......####.....'
'#...............'
'###############.'
*/

// Reconstitution T2
$w = 16; $h = 10; $n = 12321123212397;
// $n  = $ni  = 77;
$ch = <<<'EOD'
...#...###......
...............#
.#..............
...........#....
................
................
..#O............
.......####.....
#...............
###############.
EOD;
// => 4 2

$chAff = str_replace("\r\n", '<br>', $ch);
$ch    = str_replace("\r\n", '', $ch);

$p = strpos($ch, 'O'); // Position

$lf = ($loopfound = $w * $h - substr_count($ch, '#')) * 5;
vdli($lf);
$s  = [$p - $w, $p + 1, $p + $w, $p - 1]; // Sens
$vs = 0;
$r  = [];

while (--$lf) {
  $p = $s[$vs % 4];
  $s = [$p - $w, $p + 1, $p + $w, $p - 1]; // Sens
  $vs += '#' === ($ch[$s[$vs % 4]]);

  $r[$p] = ($r[$p] ?? 0) + 1; // Route
}
$arsum = array_sum($r);

vdli($r);

$nbe = count($r);
$kr  = array_keys($r);
$p   = $kr[(array_flip(array_keys($r))[$p] + (($n - $arsum) % $nbe)) % $nbe];
echo($p % $w).' '.intdiv($p, $w)."\n";

// https://www.codingame.com/ide/puzzle/a-childs-play
//##################################################################
// Solution validée dans codding : // La meilleure de ci-dessus
