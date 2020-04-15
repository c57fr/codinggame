<?php

include './../../dev/vdli.php';

//premiere solution
$notes = [10, 20, 13];
echo array_sum($notes) / count($notes);

echo '<hr>';

//deuxime solution
$sum     = array_sum($notes);
$nbnotes = count($notes);

$average = $sum / $nbnotes;

if (is_float($average)) {
  echo round($average, 2);
} else {
  echo $average;
}
echo '<hr>';

// autre exemple avec les fonctions
$notes = [12, 15, 25];
vdli($notes);
$ajout = array_push($notes, 89, 50);
vdli($notes);
