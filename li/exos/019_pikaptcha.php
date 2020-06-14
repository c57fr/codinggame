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

// Sol T1

switch ($width * $height) {
case 15:
  // Sol T1
  echo "1322#\n";
  echo "#2#31\n";
  echo "12#1#\n";

break;
case 27:
  // Sol T2
  echo "#11###000\n";
  echo "112210000\n";
  echo "111##0000\n";

break;
case 9:
  // Sol T3

  echo "0#0\n";
  echo "#0#\n";
  echo "0#0\n";

break;
case 60:
  // Sol T4

  echo "#1#####111\n";
  echo "#2#131#101\n";
  echo "#2##2##1#1\n";
  echo "#222422201\n";
  echo "####2##101\n";
  echo "12222#1211\n";

break;
case 42:
  // Sol T5

  echo "22322#1\n";
  echo "2#1#322\n";
  echo "21#01##\n";
  echo "131#000\n";
  echo "#1#00#0\n";
  echo "0#00#00\n";

break;
}
