<?php

fscanf(STDIN, '%d %d', $w, $h);
fscanf(STDIN, '%d', $n);
error_log(var_export($w.' x '.$h.' - '.number_format($n, 0, ', ', ' '), true));
$ch = '';
for ($i = 0; $i < $h; ++$i) {
  $str = trim(fgets(STDIN));
  $row = $str;
  $ch.=$str;
  error_log(var_export($row, true));
  // $ch .= stream_get_line(STDIN, 500 + 1);
}

//   error_log(var_export(strlen($ch), true));
function vd($v)
{
  return error_log(var_export($v, true));
}

$p = stripos($ch, 'O'); // Position
vd($p);

$s  = [$p - $w, $p + 1, $p + $w, $p - 1]; // Sens
$vs = 0;

while ($n--) {
  $p = $s[$vs % 4];
  $s = [$p - $w, $p + 1, $p + $w, $p - 1]; // Sens
  $vs += '#' === ($ch[$s[$vs % 4]]);
}
echo($p % $w).' '.intdiv($p, $w)."\n";
