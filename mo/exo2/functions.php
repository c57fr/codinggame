<?php
$x = 10;

function portee(){
    global $x;
    echo "La valeur globale de $x est : " . "<br>";
    $x = $x + 5;
}

portee();
echo '$x contient maintenant : ' .$x. "<br>";