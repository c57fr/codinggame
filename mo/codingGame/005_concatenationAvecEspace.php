<?php
// Créer une fonction from scratch qui s'appelle concatenationAvecEspace(). Elle prendra deux arguments de type string. Elle devra retourner la concatenation des deux. Exemple : argument 1 = Ngolo Argument 2 = Kante; Resultat : Ngolo Kante

function concatenationAvecEspace(){
    $argumen1 = "Ngolo";
    $argument2 = "Kante";
    
    return $argumen1 . " " . $argument2;
}
echo concatenationAvecEspace();