<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}


$arr=[-7, -3, 0, 3, 5, -5];
//echo count($arr);
/*if($arr < 0)
{
  echo count($arr);
}
exit;*/
$v = [];
/*if($arr < 0)
  {
    echo array_count_values($arr)."<br>";
  }
  if($arr == 0)
  {
    echo array_count_values($arr)."<br>";
  }*/

  //exit;
foreach ($arr as $k => $ar) {
  //echo $k ." = ".$ar."<br>";
  if($ar < 0)
  {
    echo $ar."<br>";
    //echo count($ar)."<br>";
  }

  if($ar == 0)
  {
    echo $ar."<br>";
    //echo count($ar)."<br>";
  }
}

exit;
for($i = 0; $i <= $arr; ++$i)
{
  echo $i."<br>";
  exit;
  if($i === 0)
{
  echo $i."<br>";
}
elseif($i < 0)
{
  echo $i."<br>";
}
  /*for($x = 0; $x < count($arr); ++$x)
  {
    echo $x."<br>";
  }*/
}

exit;
//<<<<<<< devGC7
function search_val()
{

  $arr = [];
  $valeurs = ['negatives', 'positive', 'nulles'];
  $vars    = ['$nb_neg', '$nb_pos', '$nb_zero'];
  foreach($valeurs as $k => $valeur) {
    //echo $valeur."<br>";
    foreach ($vars as $k => $var) {
     $valeur.'  '.$var.'<br>';
    }
  }
  echo $valeur.'  '.$var.'<br>';
  //echo array_unique($valeur, $var);

  /*for($y = 0; $y < $valeurs; ++$y)
  {
    //echo $y."<br>";
    for($x = 0; $x < $vars; ++$x)
    {
      echo $x[$y]."<br>";
    }
  }*/
  //return $arr;
  /*$vars = ['$nb_neg', '$nb_pos', '$nb_zero'];
    foreach($vars as $k => $var)
    {
      echo $valeur. '  '. $var."<br>";

    }*/
}
vdli(search_val());
exit;
//=======
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
/*
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
for($i = 0; $i < 6; $i++)
{
  //echo ($i%3)."  ";
}
$couls = ['blue','white', 'red'];
for($i = 0; $i < 8; $i++)
{
  echo '<div style = "color : '.$couls[$i%3].'">'.$i.'</div>'."<\n>";
}*/
  //echo '<div style = "color : blue">0<div/>';
  /*echo '<div style = "color : white">1<div/>';
  echo '<div style = "color : red">2<div/>';
  echo '<div style = "color : blue">3<div/>';
  echo '<div style = "color : white">4<div/>';
  echo '<div style = "color : red">5<div/>';
  echo '<div style = "color : blue">6<div/>';
  echo '<div style = "color : white">7<div/>';*/

function affTables()
{
  ?>
  <style>
    body{
      background-color : black;
      font-family: arial;
    }
</style>
  <?php

  $l = 0; // per;et d4initiqliser le nombre de lignes

  for ($x = 1; $x < 13; ++$x) {
    for ($y = 1; $y <= 12; ++$y) {
      echo $l++; // permet d'afficher le nombre de lignes
      //$coul = ($l % 2) ? 'bleu' : 'rouge'; // si on divise 4l par 2 et que c'est pas égal à zéro et que c'est impair alors la couleur sera bleu sinon rouge
      $couls = ['cyan', 'white', 'red'];
      /*for($y = 1; $y <= 12; ++$y)
      {*/
      echo '<div style = "color : '.$couls[($y - 1) % 3].'">'.$x.' x '.$y.' = '.$x * $y.'</div>'."<\n>";
      //echo '<div class="'.$couls[$y%3].'">'.$x.' x '.$y.' = '.$x * $y.'</div>'."</n>";
      //}
    //echo '<hr>';

      //echo '<div class="'.$coul.'">'.$x.' x '.$y.' = '.$x * $y.'</div>'."</n>";
    }
    echo '<hr>';
  }
  /*for($i = 0; $i < $l; $i++)
  {
    echo ($i%3);
  }
  $coul = ['bleu', 'blanc', 'rouge'];
  for ($i = 1; $i < $l; $i++) {
    echo $coul[$i % 3].'<br>';
  }*/
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
      echo '<div class="'.$coul.'">'.$x.' x '.$y.' = '.$x * $y.'</div>'.'</n>';
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
