Exo 021: Van Eck's.
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu x.debug ds chrome

// https://www.codingame.com/training/easy/van-ecks-sequence

// // Reconstitution Test 1
// $A1 = 0;
// $N  = 3;
// // 0

// Reconstitution Test perso
$A1 = 7;
$N  = 5;
// 0

function affE()
{
  global $e, $i, $v;
  echo $i.' / <strong>'.$v.'</strong>';
  vdli($e);
  echo '<hr>';
}

// Init
echo '0 / <strong>'.$A1.'</strong><hr>';
$e = [$A1 => 0, 0 => 1];
$i = 1;
$v = 0;
affE();

for ($i = 2; $i < $N; ++$i) {
  if (isset($e[$v]) && $e[$v] - 1 > $i) {
    ++$e[$v];
    $v     = $e[$v];
    $e[$v] = $i;
  } else {
    $v     = 0;
    $e[$v] = $i;
  }
  affE();
}

exit;
//0
$i      = 0;
$e[$A1] = $v = 0;
$e[0]   = $v;
affE(); //0

//1
$i = 1;
// $e[$next]++;
affE(); //0

//2
$i = 2;
if (isset($e[$v])) {
  ++$e[$v];
}
$e[$e[$v]] = $i;
$v         = $e[$v];
affE(); //1

// 3
$i = 3;
if (isset($e[$v])) {
  ++$e[$v];
}
$e[$e[$v]] = $i;
affE(); //1

// $nexts = array_keys($e, $next, true);
// vdli($nexts);
// die (implode ($nexts));
// $e[$nexts[0] + 1] = $i;

//echo $next[0] + 1;  // 1

// for ($i = 1; $i <= $N; ++$i) {
//   if (array_key_exists($e[$A1], $e)) {
//     echo 'oui';
//   }
//   $e[] = ($e[$A1 - 1]) ?? $A1;
// }

vdli($e);
// $arr = array_fill(0, 1000001, 555); Test des limites o cas où
// vdli($arr);

//##################################################################
/*

Solution dans codding :



<?php


*/
