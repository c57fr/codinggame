<?php

if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
} // vdli()


function getAllUtilisateurs()
{
  $allUsers = [ // age, email, blocked
    [9,   'Pier@ici.com',      false],
    [19,  'Pol@la.com',        true],
    [99,  'Jack@ailleurs.com', false],
    [789, '',                  false],
  ];

  $users = [];
  foreach ($allUsers as $oneUser) {
    $user          = new StdClass();
    $user->age     = $oneUser[0];
    $user->email   = $oneUser[1];
    $user->blocked = $oneUser[2];
    $users[]       = $user;
  }

  return $users;
}

function getUtilisateursAutorises(): array
{
  $users     = getAllUtilisateurs();
  $autorised = [];

  foreach ($users as $user) {
    if ($user->age > 17 && !empty($user->email && !$user->blocked)) {
      $autorised[] = $user;
    }
  }

  return $autorised;
}

vdli(getUtilisateursAutorises());

//https://www.codingame.com/playgrounds/32339/exercices-de-php-pour-debutant

/*
Créer une fonction from scratch qui s'appelle getUtilisateursAutorises(). Il faut intégrer la librairie ./libraryToInclude.php

La fonction retournera un array d'utilisateur autorisés.

Il faut d'abord récupérer la liste de tous les utilisateurs. Cette liste se trouvera en appellant la fonction getAllUtilisateurs()

Une fois tous les utilisateur récuperés, faire les opérations suivantes :

Supprimer les utilisateurs bloqués.
Supprimer les utilisateurs qui n'ont pas d'adresse email
Supprimer les utilisateurs qui ont moins de 18 ans.
Enfin retourner la nouvelle liste propre.
*/
