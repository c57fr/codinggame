<?php
// Créer une fonction from scratch qui s'appelle plusGrand(). Elle prendra deux arguments de type int. Elle devra retourner le plus grand des deux.


function plusGrand($argument1, $argument2){
    if($argument1 > $argument2)
    {
        return $argument1;
        //return "$argument1 est plus grand que $argument2";
    }elseif($argument1 < $argument2){
        return $argument2;
    }else{
        //return "$argument1 est plus petit que $argument2";
        return $argument1;
    }

}
//var_dump(plusGrand(23,15));
echo plusGrand(2,23);

// A refaire: Ne marche pas si c'est le 2ème argument qui est le plus grand ( => Ne renvoie rien !)