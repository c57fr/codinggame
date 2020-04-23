<?php
// Créer une fonction from scratch qui s'appelle premierElementTableau(). Elle prendra un argument de type array. Elle devra retourner le premier élement du tableau. Si l'array est vide, il faudra retourner null;

function premierElementTableau($notes){
    // $notes = [];
    if(!empty($notes))
    {
        //return array_key_first(count($notes));
        return $notes[0];
    }
    
    return null;
    
}
//var_dump(premierElementTableau(4,78));
var_dump(premierElementTableau([78, 9]));
echo '<hr>';
var_dump(premierElementTableau([]));
