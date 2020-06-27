Exo 024: Create the longest sequence of 1s.<hr>
<?php
// $s = 'x';

// Reconstitution T1
$b = '00';
// echo "1\n";

// Reconstitution T2
$b = '01010';
// echo "3\n";

// Reconstitution T3
// $b = '11011101111';
// $b='11011111111';
// 8

// Soluce Pneu84
$bb = array_map('strlen', explode('0', $b));
vdli($bb);
for ($j = 1; $j < count($bb); ++$j) {
  $bb[$j - 1] += $bb[$j];
}
vdli($bb);
echo(max($bb) + 1).'<hr>';

//////////////////////////////////////////

preg_match_all('/0/', $b, $z, PREG_OFFSET_CAPTURE);
$a   = array_column($z[0], 1);
$a[] = $l = strlen($b);

$max = 0;
foreach ($a as $k => $v) {
  $max = max($max, ($a[$k + 1] ?? $l) - ($a[$k - 1] ?? -1) - 1);
}
echo $max."\n";

////////////////////////////////////////

preg_match_all('/0/', $b, $z, PREG_OFFSET_CAPTURE);
$a   = array_column($z[0], 1);
$a[] = $l = strlen($b);

vdli($k);

vdli($a);
echo '<hr>';

$max = 0;
foreach ($a as $k => $v) {
  $max = max($max, ($a[$k + 1] ?? $l) - ($a[$k - 1] ?? -1) - 1);
}

echo $max.'<hr>';

// https://www.codingame.com/ide/puzzle/create-the-longest-sequence-of-1s
//##################################################################
// Solution validée dans codding :
