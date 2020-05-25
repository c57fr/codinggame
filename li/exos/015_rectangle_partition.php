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

$t  = ['orange', 'citron', 'banane', 'pomme'];
$n  = count($t);
$ct = []; // Tableau qui va contenir les rcombinaisons de tags

function listeCombi($debut, $tags, $profondeur)
{
  global $ct;

  if (0 === $profondeur) {
    array_push($ct, $debut);

    return;
  }
  $n = count($tags);
  for ($i = 0; $i < $n; ++$i) {
    listeCombi($debut.$tags[$i].',', array_slice($tags, $i + 1), $profondeur - 1);
  }
}

for ($i = 1; $i <= $n; ++$i) {
  listeCombi(',', $t, $i);
}

// echo "<pre>";
// print_r($ct);
// echo"</pre>";

// exit;
$w      = 10;
$h      = 5;
$countX = 2;
$countY = 1;

$xs = [2, 5];
array_unshift($xs, 0);
array_push($xs, $w);

$ys = [3];
array_unshift($ys, 0);
array_push($ys, $h);

// vdli($xs);
// vdli($ys);

// echo '<hr>';
function getCombs($arr)
{
  foreach ($arr as $k => $v) {
    // echo $v.' ';
    foreach ($arr as $k2 => $v2) {
      if ($v !== $v2) {
        $cs = [$v, $v2];
        sort($cs);
        $combs[$cs[0].$cs[1]] = $cs[1] - $cs[0];
      }
    }
  }

  // return array_unique($combs);
  // $combs=sort($combs);
  return $combs;
}
$axs = getCombs($xs);
$ays = getCombs($ys);
vdli($axs);
vdli($ays);

$q=0;
foreach ($ays as $k => $v) {
  foreach ($axs as $k2 => $v2) {
    if ($v === $v2) {
      // echo $v.' x '.$v2.'<br>';
      $q++;
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
