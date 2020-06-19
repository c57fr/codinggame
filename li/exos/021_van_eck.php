<link rel="stylesheet" href="./exos/021_ve_style.css">
Exo 021: Van Eck's Sequence.<br>
<?php

$affArr = function ($arr) {
  echo implode(', ', $arr).'<hr>';
};

// // Reconstitution Test 1
// $A1 = 0;
// $N  = 3;
// 0

$A1 = 0; // 0 ≤ A1 ≤ 200
$N  = 1e4; // 1 ≤ N ≤ 1000000 - // 1e4+5 => 2 958
//NB: 5e3 pour env. 1.25" / 16 kb - 1e4 env 5 pour ve1 & ve2"

echo '<p style = "text-align:center; font-family:arial"><font size="3"><strong>'.number_format($N, 0, ',', ' ').'</strong> premier'.($plur = ($N > 1) ? 's' : '').' élément'.$plur.' en partant de <strong>'.$A1.'</strong></font></p><hr>';

// include '021_ve1.php'; // Double boucle
// include '021_ve2.php'; // Avec Manipulations Array
include '021_ve3.php'; // Dictionnaire  ([N, lastIndex])
// include '021_ve4.php'; // 2do Avec Yield
include '021_ve5.php'; // Vars dynamiques
// include '021_ve6.php'; // Otpv
// 2do Meilleure méthode -> Pour coding, ne renvoie que le Nième elmt
// include '021_ve5.php';

if (isset($methode) && is_array($methode) && 1) {
  echo '<table class="tc"><tr><th scope="col">Méthode</th><th scope="col">Der</th><th scope="col">Mémoire</th><th scope="col">Chrono</th></tr>';
  foreach ($methode as $k => $m) {
    $fct = 've'.$k;
    $deb = microtime(true);
    $seq = $fct($A1, $N);
    //vdli($seq);
    $charge = array_pop($seq);
    // vdli($seq);
    $der = end($seq);

    echo '<tr><td scope="lg">'.$methode[$k].'</td><td>'.nf($der, 0).'</td><td>'.$charge.'</td><td>'.chrono($deb, 1).'</td></tr>';
  }
  echo '</table>';
}

// if ($N < 1e3) {
  include '021_ve.php'; // 2do Meilleure actuelle  méthode (Suppr à terme)
  echo '<hr>';
  $affArr($ve['best']($A1, 30));
// }

function affArr()
{
  global $arr;
  echo implode(', ', $arr).'<br>';
}

function affArr2($arr)
{
  echo vname().' = '.(count($arr) ? implode(', ', $arr) : '[]').'<br>';
}

// https://www.codingame.com/training/easy/van-ecks-sequence

//##################################################################
/*

Solution validée dans codding : // La meilleure de ci-dessus



<?php


*/
