<?php
$x = 10;

function portee1(){
    echo "La valeur globale de $x globale est : " .$x. "<br>";
}

function portee2(){
    $x = 5;
    echo "La valeur globale de $x locale est : " .$x. "<br>";
}

function portee3(){
    $y = 0;
    $y++;
    echo '$y contient la valeur : ' .$y. '<br>';
}

function portee4(){
    $z = 1;
}

portee1();
portee2();
portee3();
portee3();
portee4();