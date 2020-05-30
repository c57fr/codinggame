Exo 018: Graffiti.
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu xd.ebug ds chrome

// https://www.codingame.com/training/easy/graffiti-on-the-fence

// Reconstitution test 1

$L  = 10;
$N  = 2;
$rs = [[1, 4], [5, 6]];

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
// $L  = 100;
// $N  = 10;
// $rs = [
//   0 => [
//     0 => 2,
//     1 => 3,
//   ],
//   1 => [
//     0 => 3,
//     1 => 20,
//   ],
//   2 => [
//     0 => 20,
//     1 => 30,
//   ],
//   3 => [
//     0 => 30,
//     1 => 40,
//   ],
//   4 => [
//     0 => 41,
//     1 => 60,
//   ],
//   5 => [
//     0 => 60,
//     1 => 70,
//   ],
//   6 => [
//     0 => 70,
//     1 => 88,
//   ],
//   7 => [
//     0 => 88,
//     1 => 99,
//   ],
//   8 => [
//     0 => 99,
//     1 => 100,
//   ],
//   9 => [
//     0 => 40,
//     1 => 41,
//   ],
// ];

// vdli($rs);
sort($rs);
// vdli($rs);

$m = array_merge([0], range(1, $L - 1));
// vdli($m);

foreach ($rs as $k => $v) {
  for ($i = $v[0]; $i < $v[1]; ++$i) {
    unset($m[$i]); // code...
  }
}
sort($m);
// vdli($m);

$sols = [];

if (count($m)) {
  $nfence = 1;
  foreach ($m as $k => $v) {
  }
  for ($i = count($m) - 1; $i >= 0; --$i) {
    if ($m[$i] - 1 === @$m[$i - 1]) {
      // echo $m[$i];
      $nfence++;
      unset($m[$i]);
    }
    else {
      // vdli($m[$i]);
      $sols[]=[$m[$i], $nfence];
      $nfence=1;
    }
  }

sort($sols);
  // vdli($m);
  // vdli($sols);

  foreach ($sols as $k => $v) {
    echo $v[0].' '.($v[0]+$v[1]).'<br>';
  }
} else {
  echo 'All painted'."\n";
}

// exit;

//##################################################################
/*

Solution dans codding :

<?php



*/
