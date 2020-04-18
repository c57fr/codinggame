<?php
function demander_crenau($phrase = "Veuiller entrer un creneau"){
    echo $phrase . "/n";
    while (true) 
    {
        $ouverture = (int)readline("Veuillez entrer une heure d'ouverture");
        if($ouverture >= 0 && $ouverture <= 23)
        {
            break;
        }
        
    }

    while (true) {
        $fermeture = (int)readline("Veuillez entrer une heure de fermeture");
        if($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture)
        {
            break;
        }
    }

    return [$ouverture, $fermeture];

}
$creneau = demander_crenau();
$creneau = demander_crenau('Veuillez entrer votre creneau');
var_dump($creneau, $creneau2);