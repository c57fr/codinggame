<?php
//Créer une fonction from scratch qui s'appelle quelleAnnee(). Elle devra retourner un integer representant l'année actuelle.

function quelleAnnee($annee){
    return date("Y");
}
echo "Nous sommes en ".quelleAnnee("Y");

//https://www.codingame.com/playgrounds/32339/exercices-de-php-pour-debutant

/*
Dans codingame; il faut mettre le code ci-dessous
function quelleAnnee(){
    return date("Y");
}
var_dump(quelleAnnee());
*/