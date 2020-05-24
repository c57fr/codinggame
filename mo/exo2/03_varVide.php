<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
} // vdli()

$var;
if (empty($var)) {
  echo $var = 10;
} else {
  echo $var;
}

// Sol GC7
$var = (empty($var)) ? 10 : $var;

// Sol GC7 après réflexion... :
$var = $var ?: 10;

echo "<hr>";

$d = 20130521201511;
$x = substr($d, 0, 4) .'-'. substr($d, 4,2) .'-'. substr($d,6,2);
echo $x;

echo "<hr>";
$n = 29/07/1986;
if(substr($n, 0, 4) .'-'. substr($n, 4,2) .'-'. substr($n,6,2)){
  echo $n;
}

// https://www.codingame.com/playgrounds/41820/exercice-php---base/exercice-3

// Il faut affecter la valeur 10 à la variable $var si celle-ci est vide et conserve la valeur de $var sinon.
