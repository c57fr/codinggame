Exo 017: Lumen.
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu xd.ebug ds chrome

// https://www.codingame.com/training/easy/lumen

// Reconstitution test 1

// echo 'X'<=0;

// exit;
$N     = 5;
$L     = 3;
$LINES = [
  'X X X X X',
  'X C X X X',
  'X X X X X',
  'X X X X X',
  'X X X X X',
];

// fscanf(STDIN, "%d", $N );
// fscanf(STDIN, "%d", $L );
$map = array_fill(0, $N, array_fill(0, $N, 0));
// vdli($map);
// exit;

for ($z = $y = 0; $y < $N; ++$y) {
  $line = explode(' ', $LINES[$y]);
  foreach ($line as $x => $s) {
    if ('C' === $s) {
      for ($i = 0; $i < $L; ++$i) {
        for ($yy = $y - $i; $yy <= $y + $i; ++$yy) {
          for ($xx = $x - $i; $xx <= $x + $i; ++$xx) {
            $map[$xx][$yy] = 1;
          }
        }
      }
    }
  }
}
// vdli($map);
$z=0;
// affM($map);
foreach ($map as $x) {
  $z += array_count_values($x)[0] ?? 0;
}
echo "${z}\n";

exit;
// Sol 01
// Recherche des candles
for ($i = 0; $i < $N; ++$i) {
  $m[$i] = explode(' ', str_replace('X', 0, $LINES[$i]));
}
affM($m);

// $cs=[];
for ($i = 0; $i < $N; ++$i) {
  for ($j = 0; $j < $N; ++$j) {
    if ($m[$i][$j]) {
      $cs[] = [$i, $j];
    }
    $m[$i][$j] = 0;
  }
}

// vdli($cs);

function get0($m)
{
  $c = 0;
  $N = count($m);
  for ($i = 0; $i < $N; ++$i) {
    for ($j = 0; $j < $N; ++$j) {
      $c += 0 === $m[$i][$j];
    }
  }

  return $c;
}

function recursiveLights($m, $i, $j, $lightPower)
{
  global $m;
  $N = count($m);

  if ($i < 0 || $i > ($N - 1) || $j < 0 || $j > ($N - 1) || $lightPower < $m[$i][$j]) {
    return;
  }
  $m[$i][$j] = $lightPower;

  recursiveLights($m, $i - 1, $j, $lightPower - 1); // N
  recursiveLights($m, $i + 1, $j, $lightPower - 1); // S
  recursiveLights($m, $i, $j - 1, $lightPower - 1); // W
  recursiveLights($m, $i, $j + 1, $lightPower - 1); // E

  recursiveLights($m, $i - 1, $j - 1, $lightPower - 1); // NW
  recursiveLights($m, $i - 1, $j + 1, $lightPower - 1); // NE
  recursiveLights($m, $i + 1, $j - 1, $lightPower - 1); // SW
  recursiveLights($m, $i + 1, $j + 1, $lightPower - 1); // SE

  /*
  if i is in cells bounds and if the lightpower in the cell is < than the current light minus one
  recursiveFunction(cells, i(-/+)1, j, lightPower-1)
  */

  return $m;
}
//   echo $m[1][3];
//   affM($m);

foreach ($cs as $k => $v) {
  echo $k.' ('.$v[0].','.$v[1].' - '.$L.')<br>';
  recursiveLights($m, $v[0], $v[1], $L);
}
echo '<br>';

  affM($m);
  echo get0($m);

//##################################################################
/*

Solution dans codding :

<?php



*/
