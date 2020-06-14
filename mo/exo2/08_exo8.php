<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}

function search_val()
{
  $valeurs = ['negatives', 'positive', 'nulles'];
  $vars    = ['$nb_neg', '$nb_pos', '$nb_zero'];
  foreach ($valeurs as $k => $valeur) {
    //$valeur."<br>";
    foreach ($vars as $k => $var) {
      echo $valeur.'  '.$var.'<br>';
    }
  }

  /*$vars = ['$nb_neg', '$nb_pos', '$nb_zero'];
    foreach($vars as $k => $var)
    {
      echo $valeur. '  '. $var."<br>";

    }*/
}
// vdli(search_val());
// exit;

function affTables()
{
  ?>
  <style>
  .gras{
    font-weight:bold;
  }
  </style>
  <?php
  for ($x = 1; $x < 13; ++$x) {
    for ($y = 1; $y <= 12; ++$y) {
      $coul = (7 === $y) ? 'gras' : '';
      echo '<div class="'.$coul.'">'.$x.' x '.$y.' = '.$x * $y.'</div>'."\n";
    }
    echo '<hr>';
  }
}

affTables();

exit;
function init_tableMomo($n, $m, $min, $max)
{
  $arr = [];

  for ($i = 0; $i < $m; ++$i) {
    for ($j = 0; $j < $n; ++$j) {
      $arr[$i][$j] = rand($min, $max);
    }
  }

  return $arr;
}

vdli(init_tableMomo(5, 3, 3, 7));

exit;

echo 'PHP version is '.PHP_VERSION;

echo '<hr>Voyons un tablo de 3 lignes de 5 cases...<hr>';

for ($y = 0; $y < 3; ++$y) {
  echo '<br>';
  for ($x = 0; $x < 5; ++$x) {
    echo $y.$x.' ';
  }
}

// Là, tu vois un tableau de 3 lignes sur 5 colonnes

function init_table($n, $m, $min, $max)
{
  $tab = [];

  for ($y = 0; $y < $m; ++$y) {
    for ($x = 0; $x < $n; ++$x) {
      $tab[$x][$y] = rand($min, $n); // la fonction range permet de ranger et rand c'est pour les valeurs aleatoires
      $tab[$x][$y] = rand($max, $m);

      return $n * $m;
    }
  }
}

vdli(init_table(2, 4, 0, 20));

echo '<br>';

// https://www.codingame.com/playgrounds/41820/exercice-php---base/exercice-8
