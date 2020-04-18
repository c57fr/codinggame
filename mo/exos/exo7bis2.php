<?php
function demander_creneau($phrase = "Veuiller entrer un creneau"){
    echo $phrase . "\n";
    while (true) 
    {
        $ouverture = (int)readline("heure d'ouverture");
        if($ouverture >= 0 && $ouverture <= 23)
        {
            break;
        }
        
    }

    while (true) {
        $fermeture = (int)readline("heure de fermeture");
        if($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture)
        {
            break;
        }
    }

    return [$ouverture, $fermeture];

}
$creneau = demander_creneau();
$creneau2 = demander_creneau('Veuillez entrer votre creneau');
var_dump($creneau, $creneau2);