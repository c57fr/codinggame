<?php
function portee(){
    $y = 5;
    echo 'Valeur $y (depuis la fonction) : ' .$y. '<br>';
}

function portee2(){
    $z = 5;
    return $z;
}

portee();
echo 'Valeur de $y (depuis l\'espace global) : ' .$y. '<br>';
$a = portee2();
echo '$z contient la valeur : ' .$a;