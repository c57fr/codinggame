<?php

$MESSAGE = 'C';
vdli($MESSAGE);

$out = '';
// test first bit

$mask = 0b1000000;
echo $mask.' ('.decbin($mask).') => '.$mask >>= 1 ;



$prevBit = 0 !== (ord($MESSAGE[0]) & 0b1000000);
vdli(ord($MESSAGE[0]));
vdli($prevBit);
// and add it to output
$out .= $prevBit ? '0 ' : '00 ';
for ($i = 0; $i < strlen($MESSAGE); ++$i) {
  $c = ord($MESSAGE[$i]);
  for ($mask = 0b1000000; 0 !== $mask; $mask >>= 1) {
      vdli($mask);
      vdli(decbin($mask));
    $bit = 0 !== ($c & $mask);
    if ($bit === $prevBit) {
      // add one 0 for RLE
      $out .= '0';
    } elseif ($bit) {
      // new sequence of 1s with at least one 1
      $out .= ' 0 0';
    } else {
      $out .= ' 00 0';
    }
    $prevBit = $bit;
  }
}
echo $out;
