<?php
// Créer une fonction from scratch qui s'appelle quiEstLeMeilleurProf(). Elle doit retourner Le prof de programmation Web

function quiEstLeMeilleurProf(){
    return "Le prof de programmation Web";
}
echo quiEstLeMeilleurProf();

echo "<hr>";

// deuxieme maniere d'ecrire
function bestProf(){
    $c = "Le prof de programmation Web";
    return $c;
}
echo bestProf();