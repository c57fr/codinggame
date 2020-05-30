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
  'C X X X C',
  'X X X X X',
  'X X X X X',
  'X X X X X',
  'C X X X C',
];



// exit;
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

function affM($m)
{
  $N  = count($m);
  $ch = '<table>';
  for ($i = 0; $i < $N; ++$i) {
    $ch .= '<tr>';
    for ($j = 0; $j < $N; ++$j) {
      $ch .= '<td>'.$m[$i][$j].'</td>';
    }
    $ch .= '</tr>';
  }
  echo $ch.'</table><br>';
}

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
