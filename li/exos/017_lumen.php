Exo 017: Lumen.
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu xd.ebug ds chrome

// https://www.codingame.com/training/easy/lumen

// Reconstitution test 1

$N     = 5;
$L     = 3;
$LINES = [
  'X X X X X',
  'X X X C X',
  'X X X X X',
  'X X X X X',
  'X X X X X',
];

vdli($LINES);

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
  echo $ch.'</table>';
}

affM($m);
//##################################################################
/*

Solution dans codding :

<?php



*/
