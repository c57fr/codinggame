<?php
//Créer une fonction from scratch qui s'appelle plusPetit(). Elle prendra deux arguments de type int. Elle devra retourner le plus petit des deux.

function plusPetit($argument1, $argument2){
    if($argument1 < $argument2)
    {
        return $argument1;
    }
}
echo plusPetit(12, 18);