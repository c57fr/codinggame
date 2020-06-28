<?php

$fp = fopen('xdata.txt', 'r');
// (1)
$donnees = fgets($fp, 3555);
// (2)
fclose($fp);
// (3)
// Affichage du resultat
echo 'Le fichier contient :'.$donnees;
