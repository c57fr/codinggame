<?php
include 'exo7bis1.php';
include 'exo7bis2.php';


function demander_creneaux($phrase = "Veuillez entrer vos creneaux"){
    $creneaux = [];
    $continuer = true;
    while ($continuer) 
    {
        $creneaux[] = demander_creneau();
        $continuer = repondre_oui_non("Voulez-vous continuer ?");
    }

    return $creneaux;

}
$creneaux = demander_creneaux("Entrez cotre creneau");
var_dump($creneaux);