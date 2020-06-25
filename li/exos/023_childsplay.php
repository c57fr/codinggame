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
echo $chAff.'<hr>imax = '.(strlen($ch) - 1).'<hr>';

$p = strpos($ch, '0'); // Position

// var_dump($p);
$s  = [$p - $w, $p + 1, $p + $w, $p - 1]; // Sens
$vs = 0;

while (--$n) {
  echo ($p = $s[$vs % 4]).'<br>';
  $s = [$p - $w, $p + 1, $p + $w, $p - 1]; // Sens
  echo($vs += '#' === ($ch[$s[$vs % 4]])).'<hr>';
}

// https://www.codingame.com/ide/puzzle/a-childs-play
//##################################################################
// Solution validée dans codding : // La meilleure de ci-dessus
