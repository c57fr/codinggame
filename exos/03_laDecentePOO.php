<?php

function vd($tab = 'sommets')
{
  global $sommets, $cibles;
  // echo '<pre>';
  // print_r(${$tab});
  // echo '</pre>';
  echo '$'.$tab.': ['.implode(', ', ${$tab}).']';
}

function vds()
{
  vd();
  echo ' - ';
  vd('cibles');
  echo '<hr>';
}

$sommets = [9, 8, 7, 6, 0, 4, 3, 2];
$cibles  = $sommets;
array_push($cibles, 0);
// unset($cibles[5]);

/*
Height of mountain 0 : 9
Height of mountain 1 : 8
Height of mountain 2 : 7
Height of mountain 3 : 6
Height of mountain 4 : 0
Height of mountain 5 : 4
Height of mountain 6 : 3
Height of mountain 7 : 2
*/

// => Sans une boucle for, $sommets[$i] va te sortir la haute de la montagne en cours
// Soit l'équivalent dans coding, de :
/*
fscanf(STDIN, "%d",
$mountainH // represents the height of one mountain, from 9 to 0. Mountain heights are provided from left to right.
);
=> $monainH = ton ^sommets[$i] ;-)
*/

class Montagne
{
  public $h = 0; // Hauteur
  public $i = 0; // Index
}

class Culminant extends Montagne
{
  public function update($i, $h)
  {
    $this->i = $i;
    $this->h = $h;
  }
}

// $montagne  = new Montagne();
$culminant = new Culminant();

foreach ($sommets as $p => $k) { // Faut faire autant de passage qu'il y a de sommets à détruire
  $culminant->h = 0; // On re-initialise la hauteur du culminant pour un nouveau passage

  foreach ($cibles as $i => $h) {
    if ($h >= $culminant->h) {
      $nouvoSommetMax = array_search($h, $sommets, true);
      $culminant->update($nouvoSommetMax, $h);
      
      unset($cibles[$i]); // Destruction montagne d'index $i
    }
  }
  echo '<br>=> Pour le passage '.($p + 1).": Index <strong>{$culminant->i}</strong> à détruire (Soit la montagne de hauteur {$culminant->h} )\n<br><br>"; // The index of the mountain to fire on.
  vds();
}

//////////////////////////////////////////////////////////////
/*
Solution dans codding :


<?php

class Montagne
{
  public $i = 0; // Index
  public $h = 0; // Hauteur
}

class Culminant extends Montagne
{
  public function update($i, $h)
  {
    $this->i = $i;
    $this->h = $h;
  }
}

$culminant = new Culminant();

// game loop
while (TRUE)
{
    $culminant->h = 0; // On re-initialise la hauteur du culminant pour un nouveau passage
    for ($i = 0; $i < 8; $i++)
    {
        // $mountainH: represents the height of one mountain.
        fscanf(STDIN, "%d", $h);
    
        if ($h >= $culminant->h) {
           $culminant->update($i, $h);
        }
    }
    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo($culminant->i."\n"); // The index of the mountain to fire on.
}
?>

*/