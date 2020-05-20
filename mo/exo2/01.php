<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
} // vdli()

// Aide: Pour $d, tu as besoin de: array_map avec callback() + range()

// Ici ton code solution

/*
Pour cette exercice, il faut créer et initialiser les variables suivantes :

la variable a doit contenir la chaîne de caractère 42;
la variable b doit contenir l'entier 42;
la variable c doit contenir la chaîne de caractère Hello World!;
la variable d doit être un vecteur avec les indices de 0 à 5 et comme valeurs les carrés de chaque indices. Donc sous l'indice 3 on trouve la valeur 9.
*/
