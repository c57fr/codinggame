<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
} // vdli()


$a = "42";
$b = 42;
$c = "Hello World";

function carre($n){
  return ($n * $n);
}
//$e = [0,1,2,3,4,5];
$d = array_map('carre', range(0,5));
vdli($d);

// Aide: Pour $d, tu as besoin de: array_map avec callback() + range()

// Ici ton code solution

/*
Pour cette exercice, il faut créer et initialiser les variables suivantes :

la variable a doit contenir la chaîne de caractère 42;
la variable b doit contenir l'entier 42;
la variable c doit contenir la chaîne de caractère Hello World!;
la variable d doit être un vecteur avec les indices de 0 à 5 et comme valeurs les carrés de chaque indices. Donc sous l'indice 3 on trouve la valeur 9.
*/

/*
function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
echo "<pre>";
print_r($b);
echo "<pre>";
echo "<hr>";
vdli($b);
*/