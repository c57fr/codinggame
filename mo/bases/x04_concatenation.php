<?php

$date = gmdate('H\\hi');
echo "Il est ${date}".'gmt.';
echo '<br>';
$date1 = date('H:i:s');
echo "Il est ${date1}".'gmt.';

echo '<hr>';
// l'utilisqtion de '' ou de ""
$nom = 'Martin';
echo "Mon nom est ${nom}";
echo '<br>';

$nom1 = 'Momo';
echo "Mon nom est ${nom1}";
echo '<br>';
//affichage avec de simple quote
$nom = 'Martin';
echo 'Mon nom est $nom';
echo '<br>';
$nom1 = 'Momo';
echo 'Mon nom est $nom1';
echo '<hr>';
// affichage avec de simple quote
$nom = 'Martin';
echo 'Mon nom est '.$nom;
echo '<br>';
$nom1 = 'Momo';
echo 'Mon nom est '.$nom1;

echo '<hr>';
echo 'Nous sommes le '.gmdate('d-m-Y').'...';
echo '<br>';
echo 'Nous sommes le '.gmdate('d-m-Y H:i').'...';
