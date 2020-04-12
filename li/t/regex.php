<?php

$MESSAGE = 'C';
vdli($MESSAGE);

echo rtrim(preg_replace_callback('@(.)\1*@', function ($m) {
  return ($m[1] ? '0' : '00').' '.str_repeat('0', strlen($m[0])).' ';
}, preg_replace_callback('@.@', function ($m) {
  return sprintf('%07b', ord($m[0]));
}, $MESSAGE)));

echo '<hr>';

echo rtrim(
  preg_replace_callback(
    '@(.)\1*@',
    function ($m) {
      return ($m[1] ? '0' : '00').' '.str_repeat('0', strlen($m[0])).' ';
    },
    preg_replace_callback('@.@', function ($m) {
      return sprintf('%07b', ord($m[0]));
    }, $MESSAGE)
  )
);

echo '<hr>';

$txt = 'Mon texte est court. Ai-je les cheveux courts aussi ?';
echo $txt.'<br>';

echo preg_replace_callback('@(court)\1*@', function () {
  return 'long';
}, $txt);

echo '<hr>';

echo preg_replace_callback('@.@', function ($m) {
  return sprintf('%07b', ord($m[0]));
}, '%');

// echo rtrim(
//   preg_replace_callback('@(.)\1*@', function ($m) {
//     return ($m[1] ? '0' : '00').' '.str_repeat('0', strlen($m[0])).' ';
//   },
//   preg_replace_callback('@.@', function ($m) {
//     return sprintf('%07b', ord($m[0]));
//   }, $MESSAGE)));

echo '<hr>';

$values = [2, 3, 17, 4, 5];

function double($v)
{
  // vdli($v);
  return ($v[0] * 2).' ';
}
// vdli($values);

// Doc: https://medium.com/factory-mind/regex-tutorial-a-simple-cheatsheet-by-examples-649dc1c3f285

// https://regex101.com/r/94TnZp/1
echo '$values = ['.implode(',', $values).'] => '.preg_replace_callback('@([^,]+)@', 'double', implode(',', $values));
