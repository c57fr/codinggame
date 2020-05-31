Exo 018: Graffiti.
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu xd.ebug ds chrome

// https://www.codingame.com/training/easy/graffiti-on-the-fence

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

$L  = 10;
$N  = 2;
$ss = [[2, 4], [6, 8], [1, 10]];

// Reconstitution test 1

// $L   = 10;
// $N   = 2;
// $ps = [[1, 4], [5, 6]];

// $m[0] = [0, 10];

//1 4

// exit;

// vdli($pts);

// Reconstitution test 6

/*
$L  = 2e9;
$N  = 2;
$ss = [
  [
    0 => 6,
    1 => 10,
  ],
  [
    0 => 2,
    1 => 4,
  ],
  [
    0 => 7,
    1 => 8,
  ],
  [
    0 => 3,
    1 => 7,
  ],
  [
    0 => 8,
    1 => 12,
  ],
];
*/

// foreach ($se as $v) {
//   echo $v[0].' '.$v[1].'<br>';
// }
$m[0] = [0, $L];
// vdli($m);
// 1,4
// $m[0] = $se[0][0];
// $m[$se[0][1]] = 10;

// $m = array_chunk($m, 1);

// foreach ($pts as $k => $v) {
//   echo 'Cas de ['.$pts[$k][0].', '.$pts[$k][1].'] :<br>';




// 1 4
// 5 6
foreach ($ss as $v) {
  echo $v[0].', '.$v[1].' :<br>';

  foreach ($m as $b) {
    echo $b[0].' '.$b[1];
    if ($b[0] < $v[0] && $b[1] > $v[1]) {
      echo 'insert';
      $m[]  = [$v[1], $L];
      $m[0] = [0, $v[0]];
      vdli($m);
    }
  }
}

function insertD($se, $m)
{
  return $m;
}

// foreach ($ss as $k => $v) {
//   if (!$k) {
//     $m[]  = [$v[1], $L];
//     $m[0] = [0, $v[0]];
//   }
//   // $m[]   = [$v[1], 10];
//     // $m[$k] = [$m[$k][0], $v[0]];
// }
echo '<hr>';

foreach ($m as $k => $v) {
  echo $v[0].', '.$v[1].'<br>';
}

  // echo $k. ' '.$v[0].'<br>';
  // $m[$k+1][0] = $v[0];
  // $m[$k+1][$v[1]] = $m[0][0];
// }

// echo 'Cas de ['.$se[1][0].', '.$se[1][1].'] :';

// $m[4] = 5;
// $m[6] = 10;

// vdli($m);
exit;

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
      ++$nfence;
      unset($m[$i]);
    } else {
      // vdli($m[$i]);
      $sols[] = [$m[$i], $nfence];
      $nfence = 1;
    }
  }

  sort($sols);
  // vdli($m);
  // vdli($sols);

  foreach ($sols as $k => $v) {
    echo $v[0].' '.($v[0] + $v[1]).'<br>';
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
