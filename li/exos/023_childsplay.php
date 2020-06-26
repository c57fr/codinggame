Exo 023: Child's play.<hr>
<?php

// echo nf(pow(2, 53)); // n max

// $w = 12; $h = 6; $n = 987;
// $p = 41;
// echo($p % $w).' '.intdiv($p, $w)."\n";
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

$chAff = str_replace("\r\n", '<br>', $ch);
$ch    = str_replace("\r\n", '', $ch);

$p = strpos($ch, 'O'); // Position

echo $loopfound = $w * $h - substr_count($ch, '#');

$s  = [$p - $w, $p + 1, $p + $w, $p - 1]; // Sens
$vs = 0;
$r  = [];

while (--$loopfound) {
  $p = $s[$vs % 4];
  $s = [$p - $w, $p + 1, $p + $w, $p - 1]; // Sens
  $vs += '#' === ($ch[$s[$vs % 4]]);

  $r[$p] = ($r[$p] ?? 0) + 1; // Route
  // $r[$p]=$p;
}
vdli($r);
vdli(count($r));
vdli($p);
echo($p % $w).' '.intdiv($p, $w)."\n<hr>";

echo 'Décalage : '.($n - $loopfound - 1) % count($r);
echo '<hr>';

for ($i = 0; $i < 15; ++$i) {
  echo $i.' '.($i % 12).'<br>';
}

// https://www.codingame.com/ide/puzzle/a-childs-play
//##################################################################
// Solution validée dans codding : // La meilleure de ci-dessus
