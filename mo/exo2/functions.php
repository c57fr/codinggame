<?php

function bonjour($prenom, $role ='abonné(e)'){
    echo "Bonjour " .$prenom. " Vous etes un " .$role. "<br>";
}
echo bonjour('Mathilde');
echo bonjour('Pierre', 'administrateur');
echo bonjour('Nicolas');