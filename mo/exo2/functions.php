<?php

$x = 0;

function plus3($p){
    $p = $p + 3;
    echo "Valeur dans la fonction : " .$p. "<br/>";
}

plus3($x);
echo "Valeur dans la fonction : " .$x. "<br/>";
echo "<hr>";

$x = 0;

function plusTrois(&$p){ // le signe << & >> permet d'indiquer qu’on souhaite passer un argument par référence à une fonction'
    $p = $p + 3;
    echo "Valeur dans la fonction de " .$p."<br/>";
}

plusTrois($x);
Echo "Valeur en dehors de la fonction " .$x. "<br/>";