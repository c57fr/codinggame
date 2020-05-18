<?php
//Créer une fonction from scratch qui s'appelle quelleDate(). Elle devra retourner une string representant la date actuelle sous le format suivant DD/MM/YYYY

//Où DD représente le jour actuelle, MM le mois actuel et YYYY l'année actuelle. Les valeurs doivent être numérique et non au format String.

function quelleDate(){
    return date('d/m/Y');
}
var_dump(quelleDate());