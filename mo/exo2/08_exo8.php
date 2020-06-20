<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}

function search_val1(){
  $valeurs = ['negatives', 'positive', 'nulles'];
  
  $arr=[-7, -3, 0, 3, 5, -5];

  $neg = 0;
  $pos = 0;
  $nulles = 0;

foreach ($arr as $k => $ar) {
  //echo $k ." = ".$ar."<br>";
  if($ar < 0)
  {
    //echo $ar++."<br>";
    $neg++;
    //echo count($ar)."<br>";
  }

  if($ar == 0)
  {
    //echo $ar."<br>";
    //echo count($ar)."<br>";
    $nulles++;
  }
  if($ar > 0)
  {
    //echo $ar."<br>";
    //echo count($ar)."<br>";
    $pos++;
  }
}
echo "$valeurs[0]: $neg";
echo "<hr>";
echo "$valeurs[2]: $nulles";
echo "<hr>";
echo "$valeurs[1]: $pos";
echo "<hr>";
}
vdli(search_val1());
exit;
$arr=[-7, -3, 0, 3, 5, -5];

  $neg = 0;
  $pos = 0;
  $nulles = 0;

foreach ($arr as $k => $ar) {
  //echo $k ." = ".$ar."<br>";
  if($ar < 0)
  {
    //echo $ar++."<br>";
    $neg++;
    //echo count($ar)."<br>";
  }

  if($ar == 0)
  {
    //echo $ar."<br>";
    //echo count($ar)."<br>";
    $nulles++;
  }
  if($ar > 0)
  {
    //echo $ar."<br>";
    //echo count($ar)."<br>";
    $pos++;
  }
}
echo "Nombre de valeurs negatives : $neg";
echo "<hr>";
echo "Nombre de valeurs nulles : $nulles";
echo "<hr>";
echo "Nombre de valeurs positives : $pos";
echo "<hr>";

exit;


$arr=[-7, -3, 0, 3, 5, -5];

$v = [];

/*
Dans le tableau ci-dessus, il y a des valeurs négatives, positives et nulles. 
Pour afficher les éléments du tableau, on utilise la boucle foreach.
Mais pour compter le nombre d'éléments négatifs, positifs et nuls, il faut créer des conditions pour déterminer le signe de chaque valeure dans la boucle.
Dans chaque condtion il faut incrémenter une variable(nouvelle variable). Exemple :
$neg++ pour déterminer le nombre d'éléments négatifs dans la contion pour les valeurs néégatives
$pos++ pour déterminer le nombre d'éléments positifs dans la contion pour les valeurs positivess
$nulles++ pour déterminer le nombre d'éléments nuls dans la contion pour les valeurs nulles
Il faudra affecter les 3 variables incrémentées dehors de la fonctions pour éviter l'erreur dans le navigateur. Exemple :
$pos = 0;
$neg = 0;
$nulles = 0;
*/

function search_val()
{

  $valeurs = ['negatives', 'positive', 'nulles'];
  $vars    = [2,0-1];

  $neg = 'nb_neg';
  $pos = 'nb_pos';
  $nulle = 'nb_zero';

  foreach($vars as $k => $var){
    //echo $var."<br>";
    if($var < 0)
    {
      $neg;
    }
    if($var == 0)
    {
      $nulle;
    }
    if($var > 0)
    {
      $pos;
    }
  }

 echo $neg. " ". $valeurs[0]."<br>";
 echo $pos. " ". $valeurs[1]."<br>";
 echo $nulle. " ". $valeurs[2]."<br>";

}
vdli(search_val());
exit;

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
}
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
