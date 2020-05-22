<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
} // vdli()

$tab = [
  'Momo'   => 34,
  'Lio'    => 12,
  'Aziz'   => 24,
  'Ablaye' => 4,
];

foreach ($tab as $key => $valeur) {
  echo $key.' : '.$valeur.'<br/>';
}
vdli($tab);

// Sol GC7
foreach($tab as $k=>$v){
  echo $k.':'.$v."\n";
}
vdli($tab);

// Il faut afficher tous les éléments du tableau associatif $tab sous le format cle:valeur\n. Le nombre d'éléments du tableau n'est pas connu à priori.

// https://www.codingame.com/playgrounds/41820/exercice-php---base/exercice-2