Exo 021: Van Eck's. |
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu x.debug ds chrome

$affArr = function ($arr) {
  echo implode(', ', $arr).'<hr>';
};

// // Reconstitution Test 1
// $A1 = 0;
// $N  = 3;
// 0

$A1 = 7; // 77
$N  = 1e2; //5e1
echo '<p style = "text-align:center; font-family:arial"><font size="3"><strong>'.number_format($N, 0, ',', ' ').'</strong> premiers éléments en partant de <strong>'.$A1.'</strong></font></p><hr>';

include '021_ve.php'; // 2do Meilleure actuelle  méthode (Suppr à terme)
include '021_ve1.php'; // Double boucle
// include '021_ve2.php'; // 2do Avec Manipulations Array
// include '021_ve3.php'; // 2do  Dictionnaire  ([N, lastIndex])
// include '021_ve4.php'; // 2do Avec Yield
// 2do Meilleure méthode -> Renvoie que le Nième elmt
// include '021_ve5.php';

// 2do Chrono + précis :
// 2fix microtime() pour + de précisions => xx' ss" xxx
foreach ($methode as $k => $m) {
  $memtot = memory_get_peak_usage();
  echo $memtot.'<br>';
  $memdeb = memory_get_usage();
  echo $memdeb.'<br>';
  $deb = time();
  $ve[$k]($A1, $N);
  $memfin = memory_get_usage();
  echo $memfin.'<br>';
  $memtot = memory_get_peak_usage();
  echo $memtot.'<br>';
  $fin = time();
  // 2do table méthode | Mémory Used (Ko ou o) | Chrono
//   echo $methode[$k].' - Chrono: <strong>'.number_format(($fin - $deb), 0, ',', ' ').' s</strong>.<hr>';
  echo $methode[$k].' - Chrono: <strong>'.chrono($deb, $fin).'</strong>.<hr>';
}

// $affArr($ve[0]($A1, $N));

function affArr()
{
  global $arr;
  echo implode(', ', $arr).'<br>';
}

// https://www.codingame.com/training/easy/van-ecks-sequence

//##################################################################
/*

Solution dans codding :



<?php


*/