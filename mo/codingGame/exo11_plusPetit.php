<?php
//Créer une fonction from scratch qui s'appelle plusPetit(). Elle prendra deux arguments de type int. Elle devra retourner le plus petit des deux.

function plusPetit($argument1, $argument2){
    if($argument1 < $argument2)
    {
        return $argument1;
    }
    return $argument2;
}
echo plusPetit(19, 19);

echo "<hr>";
// autre maniere de faire
function small($argument1, $argument2){
    if($argument1 < $argument2)
    {
        return $argument1;
    }elseif($argument1 > $argument2)
    {
        return $argument2;
    }else{
        return $argument1;
    }
}
echo small(8, 28);