<?php
// Créer une fonction from scratch qui s'appelle capital(). Elle prendra un argument de type string. Elle devra retourner le nom de la capitale des pays suivants :
function capital($capital){
    Switch($capital) {
        case "France":
            return "Paris";
        break;
        case "Allemagne":
            return "Berlin";
        break;
        case"Italie":
            return "Rome";
        break;
        case  "Maroc":
            return "Rabat";
        break;
        case "Portugal":
            return "Lisbone";
        break;
        case "Angleterre":
            return "Londres";
        break;
        case "Tout autre pays":
            return "Inconnu";
    }
}

var_dump(capital('Maroc'));
