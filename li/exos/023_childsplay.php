Exo 023: Child's play.<hr>
<style>
.container {
  column-count: 4;
  }
.container > p {
  margin:0;
  padding-right: 10%;
}
</style>
<?php

// echo nf(pow(2, 53)); // n max

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
// Reconstitution T4
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
// => 6 6
*/

// $n = '0001234010004,';
// echo preg_replace('/(^0*)./', 'x', $n, 1).'<hr>';

// vdli($m);
// echo $s.' '.$n;

$chAff = str_replace("\r\n", '<br>', $ch);
$ch    = str_replace("\r\n", '', $ch);



$p = strpos($ch, 'O'); // Position
vdli($p);

$lf = $loopfound = $w * $h - substr_count($ch, '#');
// vdli($lf);
$s  = [$p - $w, $p + 1, $p + $w, $p - 1]; // Sens
$vs = 0;
$r  = [];

while ($lf--) {
  $i = $loopfound - $lf - 1;
  $p = $s[$vs % 4];
  $s = [$p - $w, $p + 1, $p + $w, $p - 1]; // Sens
  $vs += '#' === ($ch[$s[$vs % 4]]);

  // $r[$p] = ($r[$p] ?? 0) + 1; // Route
  $r[$i] = $p; // Route
}

vdli(count($r));

$pi = count($r) - 1; // On part de l'avant-dernier
vdli($pi);
// vdl/i($r);

vdli($lastp = $r[$pi]);
// do {
// } while (--$pi && $r[$pi]!=$lastp);
// echo $pi.' '.$r[$pi].'<hr>';
echo $pi.' '.$r[$pi].'<hr>';

// vdli(array_values($r));

// $arsum = array_sum($r);
// echo 'ars = '.$arsum.'<br>';
?>
<div class="container">
  <!-- <pre> -->
  <?php
  foreach ($r as $k => $v) {
    echo '<p style = "text-align: right">['.vf($k).'] => '.vf($v).'</p>';
    // echo '<p style = "text-align: right">['.preg_replace('/^0*/', '&nbsp;', str_pad($k, 3, 0, STR_PAD_LEFT), 1, $n).'] => '.str_pad($k, 3, 0, STR_PAD_LEFT).'</p>';
  }
  ?>
  <!-- </pre> -->
</div>
<?php
echo '<hr>';
// vdli($r);

function affArr2($arr)
{
  echo vname().' = '.(count($arr) ? implode(', ', $arr) : '[]').'<br>';
}
// echo end($r).'<hr>';
// affArr2($r);
// vdli($r);

// $nbe = count($r);
// $kr  = array_keys($r);
// $p   = $kr[(array_flip(array_keys($r))[$p] + (($n - $arsum) % $nbe)) % $nbe];
// echo($p % $w).' '.intdiv($p, $w)."\n";

// https://www.codingame.com/ide/puzzle/a-childs-play
//##################################################################
// Solution validée dans codding : // La meilleure de ci-dessus
