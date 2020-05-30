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
// vdli($rs);

$m = array_merge([0], range(1, 9));
// vdli($m);
// $n = range(1, 3);
foreach ($rs as $k => $v) {
  // vdli(range($v[0], $v[1] - 1));
  $m = array_diff($m, range($v[0], $v[1] - 1) );
}
// $o = range(5, 5);
// vdli($n);
// vdli($o);

// $rs = array_merge($n, $o);
// $rs = array_diff($m, $n);
// vdli($m);
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

// vdli($rs);
// vdli($sols);

ksort($sols);
foreach ($sols as $k => $v) {
  echo $k.' '.($k + $v).'<br>';
  // code...
}

// exit;

//##################################################################
/*

Solution dans codding :

<?php



*/
