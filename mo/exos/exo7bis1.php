<?php
function repondre_oui_non($phrase){
    while (true) {
        $reponse = readline($phrase. "Voulez-vous continuer : o(ui) ou n(on) :");
        if($reponse === 'o'){
            return true;
        }elseif($reponse === 'n'){
            return false;
        }
    }

}

$resultat = repondre_oui_non("Voulez-vous continuer ?");
var_dump($resultat);


echo '<hr>';
//https://www.codingame.com/playgrounds/32339/exercices-de-php-pour-debutant
function helloWorld(){
    return "hello world"; 
  }
echo helloWorld();
function quiEstLeMeilleurProf(){
    $c = "Le prof de programmation Web";
    return $c;
}
echo quiEstLeMeilleurProf();