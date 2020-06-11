<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}

//$tab = ["12", "-34", "0"];
function search_val(){
  $vars = [-500, 34, 0];
  foreach($vars as $k => $var)
  {
    echo $k ." : " .$var."<br>";
  }
  $signes = ['nb_neg', 'nb_pos', 'nb_zero'];
  return array_combine($vars, [
    $signes[0],
    $signes[1],
    $signes[2]
  ]);

}

vdli(search_val());
exit;
$signes = ['nb_neg', 'nb_pos', 'nb_zero'];
 
vdli($var);
echo "<hr>";
$tabVar = array_combine($tab,$var);
vdli($tabVar);

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



// https://www.codingame.com/playgrounds/41820/exercice-php---base/exercice-8
