<?php

$date  = date('d-m-Y');
$heure = date('H:i');
echo "Nous sommes le ${date} et il est ${heure}";

// Ex perso (Choisir autre option de format) :
echo '<hr>';
$jour = date('D');
$date = date('d-m-Y');
$heure = date('h:i a');
echo "Nous sommes le $jour $date et il est $heure";