<?php
/*
Créer une fonction from scratch qui s'appelle verificationPassword(). Elle prendra un argument de type string. Elle devra retourner un boolean qui vaut true si le password respecte les règles suivantes :

Faire au moins 8 caractères
Avoir au moins 1 chiffre
Avoir au moins une majuscule et une minuscule
*/
function verificationPassword($motDePasse){
    $error = [];
    if((strlen($motDePasse)) >= 8)
    {
        if((preg_match('/^([-a-zA-Z0-9])$/', $motDePasse)
        {
            return 'ok';
        }
    }else {
        return $error = "Votre mot de passe doit avoir plus de 7 chiffres";
    }
}
$mdp1 = 'mine';
$mdp2 = 'mouhamadou';
var_dump(verificationPassword($mdp1));