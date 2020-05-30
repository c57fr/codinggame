Exo 018: Graffiti.
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu xd.ebug ds chrome

// https://www.codingame.com/training/easy/graffiti-on-the-fence

// Reconstitution test 1

// $L  = 10;
// $N  = 2;
// $rs = [[1, 4], [5, 6]];

// Reconstitution test 2
// $L  = 12;
// $N  = 5;
// $rs = [
//   [6, 10],
//   [0, 4],
//   [7, 8],
//   [3, 7],
//   [8, 12],
// ];

// Test 5
$L  = 100;
$N  = 10;
$rs = [
  0 => [
    0 => 2,
    1 => 3,
  ],
  1 => [
    0 => 3,
    1 => 20,
  ],
  2 => [
    0 => 20,
    1 => 30,
  ],
  3 => [
    0 => 30,
    1 => 40,
  ],
  4 => [
    0 => 41,
    1 => 60,
  ],
  5 => [
    0 => 60,
    1 => 70,
  ],
  6 => [
    0 => 70,
    1 => 88,
  ],
  7 => [
    0 => 88,
    1 => 99,
  ],
  8 => [
    0 => 99,
    1 => 100,
  ],
  9 => [
    0 => 40,
    1 => 41,
  ],
];

// vdli($rs);
sort($rs);
// vdli($rs);

$m = array_merge([0], range(1, $L - 1));
vdli($m);
// $n = range(1, 3);
foreach ($rs as $k => $v) {
  // vdli(range($v[0], $v[1] - 1));
  $m = array_diff($m, range($v[0], $v[1] - 1));
  echo 'Retrait de '.$v[0].' '.($v[1] - 1);
  vdli($m);
}
// $o = range(5, 5);
// vdli($n);
// vdli($o);

// $rs = array_merge($n, $o);
// $rs = array_diff($m, $n);
vdli($m);
$rs = array_reverse($m);
// vdli($rs);

$n = count($m);
// vdli($n);

$sols = [];

// $r[0]++;
// foreach ($r as $k => $v) {
//   // ++$r[$k];
//   if ($r[$k]==$v){
//     echo '*';
//   }

//   // if (array_key_exists($k+1, $r)) $r[$k]++;
// }

// $r = array_map(function($v){return $v;}, $r);

if (count($m)) {
  $nfence = 1;
  for ($i = 0; $i < $n - 1; ++$i) {
    // echo $rs[$i];
    if ($rs[$i] - 1 === $rs[$i + 1]) {
      unset($rs[$i]);
      ++$nfence;
    } else {
      $sols[$rs[$i]] = $nfence;
      $nfence        = 1;
    }
  }
  $sols[$rs[$i]] = 1;
  ksort($sols);
  foreach ($sols as $k => $v) {
    echo $k.' '.($k + $v).'<br>';
    // code...
  }
} else {
  echo 'All painted'."\n";
}

// vdli($rs);
// vdli($sols);

// exit;

//##################################################################
/*

Solution dans codding :

<?php



*/
