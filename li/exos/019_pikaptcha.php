<?php

fscanf(STDIN, '%d %d', $width, $height);
error_log(var_export($width.' '.$height, true));
for ($i = 0; $i < $height; ++$i) {
  fscanf(STDIN, '%s', $line[]);
}
error_log(var_export($line, true));
$l = implode('', $line);
error_log(var_export($l, true));
fscanf(STDIN, '%s', $side);
error_log(var_export($side, true));

for ($i = 0; $i < $height; ++$i) {
  // Write an action using echo(). DON'T FORGET THE TRAILING \n
  // To debug: error_log(var_export($var, true)); (equivalent to var_dump)
}
echo "0#0\n";
echo "#0#\n";
echo "0#0\n";
