<?php


function init_table(){
$tab = [];

  for ($y = 0; $y < $m; ++$y) {
    for ($x = 0; $x < $n; ++$x) {
      $tab[$x][$y] = rand($min, $n); // la fonction range permet de ranger et rand c'est pour les valeurs aleatoires
      $tab[$x][$y] = rand($max, $m);

      return $n * $m;
    }
  }
}

function search_val() {
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

?>

?>