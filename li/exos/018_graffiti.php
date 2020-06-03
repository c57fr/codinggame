Exo 018: Graffiti.
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu x.debug ds chrome

// https://www.codingame.com/training/easy/graffiti-on-the-fence

$L = 10;

$ss = [[5, 7], [9, 10], [1, 3]]; // 3 ss juxtaposés
// $ss = [[2, 5], [4, 8]];
// $ss = [[2, 4], [6, 8], [3, 10]];
// $ss = [[4, 6], [6, 8], [0, 2], [3, 9]];

// Reconstitution test 1
$L  = 10;
$ss = [[1, 4], [5, 6]];

// Reconstitution test 2
// $L  = 12;
// $ss = [[6, 10], [0, 4], [7, 8], [3, 7], [8, 12]];

// Test 5
// $L = 100;
// $N  = 10;
// $ss = [[2, 3], [3, 20], [20, 30], [30, 40], [41, 60], [60, 70], [70, 88], [88, 99], [99, 100], [40, 41]];

// Reconstitution test 6
// $L  = 2e9;
// $ss = [[6, 10], [2, 4], [7, 8], [3, 7], [8, 12]];

// Reconstitution test 10
// $L  = 2e9;
// $N  = 50;
// $ss = [[1006862452, 1054756458], [678724219, 1778223615], [678053276, 1866811373], [634631439, 1605931752], [306180988, 1921164334], [217773907, 1732031918], [214843117, 1454854895], [82072778, 1036085256], [26474374, 1522207404], [732389, 891781], [680953, 848366], [655134, 760376], [154824, 717381], [115599, 443074], [104050, 297168], [22878, 794282], [8994, 9650], [8637, 9357], [7126, 8203], [4844, 8366], [3286, 8241], [2712, 4447], [2150, 8103], [1830, 7805], [1742, 9949], [1458, 1832], [442, 452], [261, 365], [260, 475], [239, 6154], [208, 369], [165, 239], [156, 371], [122, 4995], [119, 264], [114, 119], [81, 98], [68, 88], [52, 92], [44, 97], [31, 41], [30, 60], [27, 36], [24, 55], [17, 438], [12, 14], [5, 80], [5, 83], [4, 67], [0, 20]];

// Reconstitution test 12
// $L  = 7;
// $ss = [[1, 5], [3, 6], [0, 2]];
$N = count($ss);
affMM($ss);
foreach ($ss as $k => $v) {
  $st[]=$v[0];
  $ed[]=$v[1];
}
vdli($st);
vdli($ed);

asort($st); 
vdli($st);

$m = ''; $s=0;
foreach($st as $k => $v)
{
    if ($s < $v) $m .= "$s $v\n" ;
    if ($s < $ed[$k]) $s = $ed[$k];
}
if ($s != $L) $m .= "$s $L\n";
echo $m == '' ? "All painted\n" : $m;


exit;
sort($ss);
// $allss = array_chunk($ss, 6);
// $ss    = $allss[0];
// exit;
// affMM($ss);
$N = count($ss);
// exit;

$decal = 1;
for ($i = 1; $i < $N; ++$i) {
  // if (33 === $i) {
  //   echo 'ok';
  // }
  echo $i.':  '.implode(', ', $ss[$i]).'<br>';
  if ($ss[$i][0] <= $ss[$i - $decal][1]) {
    $ss[$i - $decal][1] = max($ss[$i - $decal][1], $ss[$i][1]);
    unset($ss[$i]);
    ++$decal;
  } else {
    if (1 !== $i) {
      $ss[$i - $decal + 1] = $ss[$i];
      unset($ss[$i]);
    }
  }
}
affMM($ss);
// exit;
// $L  = 8;
// $ss = [[1, 8]];
if (0 === $ss[0][0] && $ss[0][1] === $L) {
  echo 'All painted';
} else {
  // affMM($ss);
  array_unshift($ss, [0, $ss[0][0]]);
  // affMM($ss);
  $sols[0] = $ss[0];
  foreach ($ss as $k => $p) {
    if ($k) {
      $sols[$k] = [$ss[$k - 1][1], $p[0]];
    }
  }
  // echo 'Solutions:';
  if ($ss[$k][1] !== $L) {
    $sols[] = [$ss[$k][1], $L];
  }
  sort($sols);
  foreach ($sols as $k => $v) {
    if ($v[0] === $v[1]) {
      unset($sols[$k]);
    }
  }

  affMM($sols);

  // foreach ($sols as $k => $v) {
  //   if ($v[0] === $v[1]) {
  //     unset($sols[$k]);

  //     continue;
  //   }
  //   echo $v[0].', '.$v[1]."\n";
  // }
}

// foreach ($sols as $k => $v) {
//   echo $v[0].', '.$v[1]."\n";
// }

//##################################################################
/*

Solution dans codding :

<?php



*/
