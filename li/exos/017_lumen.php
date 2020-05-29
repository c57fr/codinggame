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
  'X X X X X',
  'X X X X X',
  'X X X X X',
  'X X X X X',
];

// vdli($LINES);

for ($i = 0; $i < $N; ++$i) {
  $m[$i] = explode(' ', $LINES[$i]);
}
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
// affM($m);

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
  recursiveLights($m, 1, 1, 3);
//   affM($m);
  echo get0($m);

//##################################################################
/*

Solution dans codding :

<?php



*/