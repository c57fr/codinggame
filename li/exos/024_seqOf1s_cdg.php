<?php

$b = array_map('strlen', explode('0', stream_get_line(STDIN, 999 + 1, "\n")));
for ($j = 1; $j < count($b); $j++) $b[$j - 1] += $b[$j];
echo max($b) + 1;

/*
$b = stream_get_line(STDIN, 999 + 1, "\n");

preg_match_all('/0/', $b, $z, PREG_OFFSET_CAPTURE);
$a   = array_column($z[0], 1);
$a[] = $l = strlen($b);

$max = 0;
foreach ($a as $k => $v) {
  $max = max($max, ($a[$k + 1] ?? $l) - ($a[$k - 1] ?? -1) - 1);
}
echo $max."\n";
*/