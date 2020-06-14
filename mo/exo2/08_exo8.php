<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
gh
<<<<<<< devGC7
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
=======
/*function search_val(){
$valeurs = ['negatives', 'positive', 'nulles'];
$vars = ['$nb_neg', '$nb_pos', '$nb_zero'];
  foreach($valeurs as $k => $valeur)
  {
      //$valeur."<br>";
    foreach($vars as $k => $var)
    {
      echo $valeur. '  '. $var."<br>";
    }
  }
 
  //$results = array_combine($valeurs, $vars);
  //vdli($results);
/*$vars = ['$nb_neg', '$nb_pos', '$nb_zero'];
  foreach($vars as $k => $var)
  {
    echo $valeur. '  '. $var."<br>";
    
  }*/
//}
//vdli(search_val());
//exit;
>>>>>>> rendu du gras de la table de multiplication

function affTables(){
  ?>
  <style>
    body{
      background-color : black;
    }
    
    .rouge{
      color : red;
    }
    .bleu{
      color: blue;
    }
    .blanc{
      color : white;
    }

  </style>
  <?php
  

  $l = 0; // per;et d4initiqliser le nombre de lignes

  for ($x = 1; $x < 13; ++$x) {
    for ($y = 1; $y <= 12; ++$y) {
      $l++; // permet d'afficher le nombre de lignes
      //$coul = ($l % 2) ? 'bleu' : 'rouge'; // si on divise 4l par 2 et que c'est pas égal à zéro et que c'est impair alors la couleur sera bleu sinon rouge
      if($l%3 ==0)
      {
        $coul = 'bleu'; // si on fait echo $coul = gras; alors il va sùafficher au dessus de chaue ligne 7 le mot gras
      }elseif($l%3 ==1){
        $coul = 'blanc';
      }else{
        $coul = 'rouge';
      }
      
      
      echo '<div class="'.$coul.'">'.$x.' x '.$y.' = '.$x * $y.'</div>'."</n>";
    }
    for($i = 0; $i < count($l); $i++)
      {
        echo ($i%3);
      }
      $coul = ['bleu', 'blanc', 'rouge'];
      for ($i = 1; $i < count($l); $i++) {
        echo $coul[$i % 3].'<br>';
      }
    echo '<hr>';
    
  }
}

affTables();


exit;

function tables()
{
  ?>
<<<<<<< devGC7
  <style>
  .gras{
    font-weight:bold;
  }
  </style>
=======
    <style>
    .gras{
      font-weight : bold;
      color : blue;
    }
    </style>

>>>>>>> error au niveau de l'affichage du gras
  <?php
  for ($x = 1; $x < 13; ++$x) {
    for ($y = 1; $y <= 12; ++$y) {
      $coul = (7 === $y) ? 'gras' : '';
      echo '<div class="'.$coul.'">'.$x.' x '.$y.' = '.$x * $y.'</div>'."</n>";
>>>>>>> error au niveau de l'affichage du gras
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
