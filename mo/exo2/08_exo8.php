<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}

//$tab = ["12", "-34", "0"];
$tab = [-500, 34, 0];
foreach ($tab as $ta) {
  /*if($ta < 0)
  {
    echo $ta.' est un nombre negative<br>';
  }
  if($ta > 1)
  {
    echo $ta.' est un nombre positive<br>';
  }
  if($ta == 0)
  {
    echo $ta.' est nul<br>';
  }*/
echo $ta.'<br>';
  
}
echo "<hr>";

foreach($tab as $k => $val)
{
  if($val > 0)
  {
    echo "nb_pos => $val<br>"; 
  }
  if($val < 0)
  {
    echo "nb_neg => $val<br>"; 
  }
  if($val == 0)
  {
    echo "nb_zero => $val<br>"; 
  }
   //echo "nb_neg => $val<br>";
}


exit;
echo 'PHP version is '.phpversion();

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

// pour le deuxieme tableau
/*$tab = ['negative', 'positive', 'nulles'];
foreach ($tab as $ta) {
  echo $ta.'<br>';
}*/


//$re = [];
/*
$re = [4, 5];
vdli(init_table(4,5));
echo "<hr/>";

$r = 5;
$e = 15;
echo mt_rand($r,$e);

echo "<hr/>";

function rand_permute($size, $min, $max)
{
    $retval = array();
    //initialize an array of integers from $min to $max
    for($i = $min;$i <= $max;$i++)
    {
        $retval[$i] = $i;
    }

}*/

// https://www.codingame.com/playgrounds/41820/exercice-php---base/exercice-8
