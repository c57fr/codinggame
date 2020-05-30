<?php
function compteur(){
    static $x = 0;
    echo '$x contient la valeur : ' .$x. '<br>';
    $x++;
}

compteur();
compteur();
compteur();
compteur();