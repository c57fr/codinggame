<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
} // vdli()

$jour  = date('d');
$mois  = date('m');
$annee = ''; // = date('Y');
//echo $jour.'/'.$mois.'/'.$annee;
$res = date($jour.'/'.$mois.'/'.$annee);
if ($res = date('d/m/Y')) {
  echo true;
} else {
  echo false;
}
vdli($res);
echo '<hr>';
if ($res = date('d/m/Y') ? true : false) {
  vdli($res);
}

// Sol GC7
$res = checkdate((int) $mois, (int) $jour, (int) $annee);
vdli($res);

//Il faut tester la validité d'une date fournie grâce aux variables $jour, $mois et $annee. Si la date est valide la variable $res sera TRUE sinon FALSE.

// https://www.codingame.com/playgrounds/41820/exercice-php---base/exercice-4
