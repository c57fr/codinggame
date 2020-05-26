Exo 015: Rectangle Partition.
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu xd.ebug ds chrome

// https://www.codingame.com/training/easy/rectangle-partition

// Reconstitution des données du test
// t 1

$w      = 10;
$h      = 5;
$countX = 2;
$countY = 1;

$xs = [2, 5];
array_unshift($xs, 0);
array_push($xs, $w);
// sort($xs);

$ys = [3];
array_unshift($ys, 0);
array_push($ys, $h);
// sort($ys);

// vdli($xs);
// vdli($ys);
/*
Recycling the ample:

  0___2______5__________10
  |   |      |          |
  |   |      |          |
 3|___|______|__________|
  |   |      |          |
 5|___|______|__________|
Possible distances:

Horizontal: 2 3 5 5 8 10
            | | |/
Vertical:   2 3 5
=> 4 possible squares.
*/

// echo '<hr>';
function getCombs($arr)
{
  // vdli($arr);
  $combs=[];
  foreach ($arr as $k => $v) {
    // echo $v.' ';
    foreach ($arr as $k2 => $v2) {
      if ($v > $v2) {
        // $cs = [$v, $v2];
        // sort($cs);
        // $combs[$cs[0].$cs[1]] = $v - $v2;
        $combs[] = $v - $v2;
      }
    }
  }
  // vdli($combs);
  // return array_unique($combs);
  // $combs=sort($combs);
  return $combs;
}
$axs = getCombs($xs);
$ays = getCombs($ys);
// sort($axs);
// sort($ays);
// vdli($axs);
// vdli($ays);

// exit;
$q = 0;
foreach ($ays as $k => $v) {
  foreach ($axs as $k2 => $v2) {
    if ($v === $v2) {
      // echo $v.' x '.$v2.'<br>';
      ++$q;
    }
  }
}
// vdli($q);
echo $q."\n";

//##################################################################
/*

Solution dans codding :

<?php



*/
