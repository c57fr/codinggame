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
$N  = 1e3; //5e1
echo '<p style = "text-align:center; font-family:arial"><font size="3"><strong>'.number_format($N, 0, ',', ' ').'</strong> premiers éléments en partant de <strong>'.$A1.'</strong></font></p><hr>';

include '021_ve.php'; // 2do Meilleure actuelle  méthode (Suppr à terme)
include '021_ve1.php'; // Double boucle
// include '021_ve2.php'; // 2do Avec Manipulations Array
// include '021_ve3.php'; // 2do  Dictionnaire  ([N, lastIndex])
// include '021_ve4.php'; // 2do Avec Yield
// 2do Meilleure méthode -> Renvoie que le Nième elmt
// include '021_ve5.php';
include 'test.php';

if (isset($methode) && is_array($methode) && 0) {
  foreach ($methode as $k => $m) {
    $deb = time();
    $ve[$k]($A1, $N);
    $fin = time();
    // 2do table méthode | Mémory Used (Ko ou o) | Chrono
    echo $methode[$k].' - Chrono: <strong>'.chrono($deb, $fin, 10).'</strong><hr>';
  }
}

if ($N < 1e3) {
  $affArr($ve[0]($A1, $N));
}

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