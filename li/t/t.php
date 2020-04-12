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
}, 'CC');

// echo rtrim(
//   preg_replace_callback('@(.)\1*@', function ($m) {
//     return ($m[1] ? '0' : '00').' '.str_repeat('0', strlen($m[0])).' ';
//   },
//   preg_replace_callback('@.@', function ($m) {
//     return sprintf('%07b', ord($m[0]));
//   }, $MESSAGE)));
