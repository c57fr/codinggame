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
  'X X X C X',
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

affM($m);

function recursiveLights($m, $i, $j, $lightPower)
{
  $N         = count($m);
  $m[$i][$j] = $lightPower;

  if ($i < 0 || $i > $N - 1 || $j < 0 || $j > $N - 1 || $lightPower <= 1) {
    return $m;
  }
  // if ($m[$i - 1][$j] < $lightPower) {
    recursiveLights($m, $i - 1, $j, $lightPower - 1);
  // }

  /*
  if i is in cells bounds and if the lightpower in the cell is < than the current light minus one
  recursiveFunction(cells, i(-/+)1, j, lightPower-1)
  */

  return $m;
}
affM(recursiveLights($m, 1, 3, 3));

//##################################################################
/*

Solution dans codding :

<?php



*/
