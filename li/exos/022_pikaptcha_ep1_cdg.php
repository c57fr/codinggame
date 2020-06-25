<?php

fscanf(STDIN, '%d %d', $w, $h);
error_log(var_export('w: '.$w.' - h:'.$h, true));

$a = [];
for ($i = 0; $i < $h; ++$i) {
  $a = array_merge($a, str_split(trim(fgets(STDIN))));
}
// error_log(var_export($a, true));

for ($l = $w * $h, $i = 0; $i < $l; ++$i) {
  echo(('#' !== $a[$i]) ?
    (
      ((($i - $w) % $w) && (($a[$i - 1] ?? '#')) !== '#') +
      (($w - 1 - $i % $w) && (($a[$i + 1] ?? '#')) !== '#') +
      (($a[$i - $w] ?? '#') !== '#') +
      (($a[$i + $w] ?? '#') !== '#')
    )
     : '#').
     ((($i + 1) % $w) ? '' : "\n"); // "\n"
}
