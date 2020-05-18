<?php

include ("./libraryToInclude.php");

function getUtilisateursAutorises(array $usersAutorises){

    if(getAllUtilisateurs()){
        return (unset) ($user < 18) OR filter_var($email, !FILTER_VALIDATE_EMAIL);
    }
    return getAllUtilisateurs();

}

//https://www.codingame.com/playgrounds/32339/exercices-de-php-pour-debutant

/*
Créer une fonction from scratch qui s'appelle getUtilisateursAutorises(). Il faut intégrer la librairie ./libraryToInclude.php

La fonction retournera un array d'utilisateur autorisés.

Il faut d'abord récupérer la liste de tous les utilisateurs. Cette liste se trouvera en appellant la fonction getAllUtilisateurs()

Une fois tous les utilisateur récuperer, faire les opérations suivantes :

Supprimer les utilisateurs bloqués.
Supprimer les utilisateurs qui n'ont pas d'adresse email
Supprimer les utilisateurs qui ont moins de 18 ans.
Enfin retourner la nouvelle liste propre.
*/