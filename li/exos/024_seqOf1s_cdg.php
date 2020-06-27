<?php

$b = stream_get_line(STDIN, 999 + 1, "\n");

preg_match_all('/0/', $b, $z, PREG_OFFSET_CAPTURE);
$a   = array_column($z[0], 1);
$a[] = $l = strlen($b);

$max = 0;
foreach ($a as $k => $v) {
  $max = max($max, ($a[$k + 1] ?? $l) - ($a[$k - 1] ?? -1) - 1);
}
echo $max."\n";
