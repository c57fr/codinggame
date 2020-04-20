<?php
if (!function_exists('vdli')) include '../../dev/vdli.php';

$ts = [ // Températures
  '0' => -10,
  '1' => -4,
  '2' => 4,
  '3' => -4,
  '4' => -14,
];
// $ts = ''; // pour test tableau vide => 0
vdli($ts);

$n = count($ts ?: []);
vdli($n);

if ($n) {
  arsort($ts);
  vdli($ts);

  echo '<hr>';
  $es = array_map('abs', $ts); // Écarts
  arsort($ts);
  vdli($ts);
  vdli($ts[array_keys($es, min($es), true)[0]]);
}

echo '<pre>';
vdli($es ?? 0);
echo '</pre>';

//////////////////////////////////////////////////////////////
/*
Solution dans codding :

<?php

<?php
if(fgets(STDIN)!=0){
    $a = explode(' ', fgets(STDIN));
    arsort($a);
    $b = array_map('abs', $a);
    die($a[array_keys($b, min($b))[0]]);
}
echo 0;

*/
