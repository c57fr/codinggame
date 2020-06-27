Exo 024: Create the longest sequence of 1s.<hr>
<?php
// $s = 'x';

// Reconstitution T1
// $b='00';
// echo "1\n";

// Reconstitution T2
// $b = '01010';
// echo "3\n";

// Reconstitution T3
$b = '11011101111';

preg_match_all('/0/', $b, $z, PREG_OFFSET_CAPTURE);

vdli(array_column($z[0],1));

echo '<hr>';

// $b2='11011111111';
// 8
vdli($l = strlen($b));

$b .= '0';
for ($ip = 0, $l = strlen($b), $i = 0; $i < $l; ++$i) {
  if (!$b[$i]) {
    $a[] = $i; // + index précédent
    // echo vf($i).' '.vf($i - $ip,5).'<br>';
    // $ip = $i; // last index
  }
//   ++$n;
}
// vdli($a);
// // $max=0;
// foreach ($a as $k => $v) {
//   echo vf($k,15).' '.$v.'<br>';
// }
// echo '<hr>'.$v."\n";
vdli($a);

$s = [$a[0]];
for ($l = count($a),$i = 1; $i < $l; ++$i) {
  $s[$i] = $a[$i] - $a[$i - 1] + $s[$i - 1];
  vdli($a);
  vdli($s);
  echo $i.'<hr>';
}
// vdli($s);

echo '<hr>'.$i."\n";

// https://www.codingame.com/ide/puzzle/create-the-longest-sequence-of-1s
//##################################################################
// Solution validée dans codding :
