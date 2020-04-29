<?php

function verificationPassword ($str){
    return strlen($str)>7 ? true:false;
}

$mdp1 = 'mine';
$mdp2 = 'mouhamadou';
var_dump(verificationPassword($mdp1));
echo '<hr>';
var_dump(verificationPassword($mdp2));


// https://www.codingame.com/playgrounds/32339/exercices-de-php-pour-debutant

// Créer une fonction from scratch qui s'appelle verificationPassword(). Elle prendra un argument de type string. Elle devra retourner un boolean qui vaut true si le password fait au moins 8 caractères et false si moins.