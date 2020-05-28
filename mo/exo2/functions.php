<?php

function bonjour(...$prenom){
    foreach($prenom as $p)
    {
        echo "Bonjour " .$p. "<br/>";
    }
}
bonjour('Pierre', 'Momo', 'Lio');