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

// https://www.codingame.com/playgrounds/41820/exercice-php---base/exercice-3

// Il faut affecter la valeur 10 à la variable $var si celle-ci est vide et conserve la valeur de $var sinon.
