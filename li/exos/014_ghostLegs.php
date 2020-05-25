Exo 014: Ghost Legs.
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu xdebug ds chrome

// https://www.codingame.com/training/easy/ghost-legs

// Reconstitution des données du test
// t 1
$line = [
  ' A  B  C ',
  ' |  |  | ',
  ' |--|  | ',
  ' |  |--| ',
  ' |  |--| ',
  ' |  |  | ',
  ' 1  2  3 ',
];

$W = strlen($line[0]);
$H = count($line);

for ($x = 1; $x < strlen($line[0]); $x += 3) {
  for ($px = $x, $y = 1; $y < $H - 1; ++$y) {
    $px += (('-' === $line[$y][$px + 1]) - ('-' === $line[$y][$px - 1])) * 3;
  }

  echo $line[0][$x].$line[$y][$px]."\n";
}

// Sol 1

$lines = [
  'A  B  C',
  '|  |  |',
  '|--|  |',
  '|  |--|',
  '|  |--|',
  '|  |  |',
  '1  2  3',
];

$depsstr = $lines[0];
$depsstr = preg_replace('/ /', '', $depsstr);
$lr      = strlen($lines[0]);
$l       = strlen($depsstr);
$h       = count($lines);

for ($i = 0; $i < $l; ++$i) {
  $deps[] = $depsstr[$i];
}

// echo '<pre>'.implode('<br>', $lines).'</pre>';

// Création matrice
foreach ($lines as $y => $l) {
  for ($x = 0; $x < $lr; ++$x) {
    if ('|' === $lines[$y][$x]) {
      $m[$x][] = 2;
    } else {
      $m[$x][] = $lines[$y][$x];
    }
  }
}

for ($x = 1; $x < $lr; $x += 3) {
  foreach ($lines as $y => $v) {
    if ('-' === $m[$x][$y]) {
      ++$m[$x - 1][$y];
    }
  }
}

for ($x = 2; $x < $lr; $x += 3) {
  foreach ($lines as $y => $v) {
    if ('-' === $m[$x][$y]) {
      --$m[$x + 1][$y];
    }
  }
}

// Établissement des chemins
foreach ($deps as $k => $v) {
  $x = $k * 3;
  $y = 0;
  for ($y = 1; $y < $h - 1; ++$y) {
    $x += (((int) $m[$x][$y]) <=> 2) * 3;
    // echo $x.','.$y.'<br>';
  }
  // echo $m[$k*3][0].$m[$x][$y].'<br>'."\n";
}

//##################################################################
/*

Solution dans codding :

<?php

fscanf(STDIN, "%d %d", $W, $H);
for ($i = 0; $i < $H; $i++)
    $line[] = ' '.fgets(STDIN);

for ($x = 1; $x < strlen($line[0]); $x += 3)
{
    for ($px = $x, $y = 1; $y < $H - 1; $y++)
        $px += (($line[$y][$px + 1] == '-') - ($line[$y][$px - 1] == '-')) * 3;

    echo $line[0][$x].$line[$y][$px]."\n";
}

*/
