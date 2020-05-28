<?php

$prenom = 'Pierre';
$x = 4;
$y = 5;

function bonjour($p){
    echo "Bonjour " .$p. "<br/>";
}

function addition($p1, $p2){
    echo $p1 . " + " .$p2 . " = " . ($p1 + $p2) . "<br>";
}
bonjour($prenom);
bonjour("Mathilde");
addition($x, $y);
addition(1,1);
echo '<hr>';

$nom = "SECK";
$prenom = "Momo";

$c = 40;
$s =5;

function direBonjour($b){
    echo "Bonjour " .$b. "<br/>"; 
}

function multiplication($a, $b){
    echo $a . " * " . $b . " = ". ($a * $b) . "<br/>";
}

direBonjour($nom);
direBonjour($prenom);
direBonjour("Lio");
multiplication($c,$s);

echo "<hr>";

$prenom = "Aziz";
$nom = "SECK";
$n = 33;
$m = 5;

function priere($p){
    echo "Que la paix soit avec toi " .$p."<br/>";
}

function division($d, $o){
    echo $d. " / " .$o. " = " . ($d / $o) . "<br/>";
}
priere($prenom);
priere($nom);
priere("Abdoulaye SECK");
division($n, $m);
