<?php
// Créer une fonction from scratch qui s'appelle concatenation(). Elle prendra deux arguments de type string. Elle devra retourner la concatenation des deux. Exemple : argument 1 = Antoine Argument 2 = Griezmann; Resultat : AntoineGriezmann

function concatenation(){
    $argument1 = "Antoine";
    $argument2 = "Griezmann";

    return $argument1.$argument2;
}

echo concatenation();

