<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}

$search_array = ['premier' => 1, 'second' => 4];

/*foreach($search_array as $ks => $v)(
  vdli($v)
);*/

if (key($search_array)) {
  echo true;
} else {
  echo false;
}
/*
$res = @array_key_exists("$key", $search_array);
if($res){
  echo true;
}else{
  echo false;
}*/

//$res = array_key_exists($key, $array);
//vdli($res);
/*
echo '<hr/>';

$search_array = array('premier' => 1, 'second' => 4);
if (array_key_exists('premier', $search_array)) {
    echo "L'élément 'premier' existe dans le tableau";
}*/
$tableau = ['kok' => 1];
$cle     = 'kok';
// Sol GC7
$res = array_key_exists($cle, $tableau);
var_dump($res);

// https://www.codingame.com/playgrounds/41820/exercice-php---base/exercice-5

// Il faut vérifier qu'une clé existe dans le tableau associatif $tableau. Si la clé $cle existe la variable $res sera TRUE sinon FALSE
