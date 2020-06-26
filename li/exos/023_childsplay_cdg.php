<?php

fscanf(STDIN, '%d %d', $w, $h);
fscanf(STDIN, '%d', $n);
error_log(var_export($w.' x '.$h.' - '.number_format($n, 0, ', ', ' '), true));
$ch = '';
for ($i = 0; $i < $h; ++$i) {
  $str = trim(fgets(STDIN));
  $row = $str;
  $ch .= $str;
  error_log(var_export($row, true));
  // $ch .= stream_get_line(STDIN, 500 + 1);
}

$p = strpos($ch, 'O'); // Position

$lf = $loopfound = $w * $h - substr_count($ch, '#');

$s  = [$p - $w, $p + 1, $p + $w, $p - 1]; // Sens
$vs = 0;
$r  = [];

while (--$lf) {
  $p = $s[$vs % 4];
  $s = [$p - $w, $p + 1, $p + $w, $p - 1]; // Sens
  $vs += '#' === ($ch[$s[$vs % 4]]);

  $r[$p] = ($r[$p] ?? 0) + 1; // Route
}
$arsum = array_sum($r);

$nbe = count($r);
$kr  = array_keys($r);
$p   = $kr[(array_flip(array_keys($r))[$p] + (($n - $arsum) % $nbe)) % $nbe];
echo($p % $w).' '.intdiv($p, $w)."\n";
