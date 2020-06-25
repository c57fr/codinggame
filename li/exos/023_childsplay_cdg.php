<?php

fscanf(STDIN, '%d %d', $w, $h);
fscanf(STDIN, '%d', $n);
error_log(var_export($w.' x '.$h.' - '.$n, true));
$ch = '';
for ($i = 0; $i < $h; ++$i) {
  // $ch += stream_get_line(STDIN, 500 + 1, "\n");
  // $ch = stream_get_line(STDIN, 500 + 1);
  $ch .= trim(fgets(STDIN));
}
//   error_log(var_export(strlen($ch), true));
function vd($v)
{
  return error_log(var_export($v, true));
}

$p = strpos($ch, 'O'); // Position
vd($p);

$s  = [$p - $w, $p + 1, $p + $w, $p - 1]; // Sens
$vs = 0;

while (--$n) {
  $p = $s[$vs % 4];
  $s = [$p - $w, $p + 1, $p + $w, $p - 1]; // Sens
  $vs += '#' === ($ch[$s[$vs % 4]]);
}
echo($p % $w + 1).' '.intdiv($p, $w)."\n";
