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
  echo '<hr>';
  vd();
  echo ' - ';
  vd('cibles');
  echo '<hr>';
}

$sommets = [9, 8, 7, 6, 0, 4, 3, 2];
$cibles  = $sommets;
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

vd(); echo '<hr>';
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

foreach ($sommets as $k => $s) { // Faut faire autant de passage qu'il y a de sommets à détruire
  $culminant->h = 0; // On re-initialise la hauteur du culminant pour un nouveau passage

  foreach ($cibles as $i => $h) {
    if (7 === $k) {
      echo 'der ('.$i.'-'.$h.')<hr>';
    }
    // $montagne->h = $h;
    // echo $sommets[$i].$montagne->h;
    // echo '<strong>'.$i.'->'.$h.'</strong><br>';
    // echo $i;
    if ($h >= $culminant->h) {
      echo "(${h} - (${i},{$culminant->i}) )";
      $culminant->update($i, $h);
      echo 'ok:'.$cibles[array_search($h, $sommets, true)];
      unset($cibles[$i]);
    }
  }
  echo '<br>=> Pour le passage '.($k + 1).": Index <strong>{$culminant->i}</strong> à détruire \n<br><br>"; // The index of the mountain to fire on.
}
