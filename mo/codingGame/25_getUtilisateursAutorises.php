<?php

if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
} // vdli()

/**
 * Juste pour simuler la function du test dans codingame.
 */
function getAllUtilisateurs()
{
  $user1          = new StdClass();
  $user1->age     = 9;
  $user1->email   = 'Pier@ici.com';
  $user1->blocked = false;

  $user2          = new StdClass();
  $user2->age     = 19;
  $user2->email   = 'Pol@la.com';
  $user2->blocked = true;

  $user3          = new StdClass();
  $user3->age     = 19;
  $user3->email   = 'Jack@ailleurs.com';
  $user3->blocked = false;

  $user4          = new StdClass();
  $user4->age     = 789;
  $user4->email   = '';
  $user4->blocked = true;

  return [
    $user1, $user2, $user3, $user4,
  ];
}

//include './libraryToInclude.php';

function getUtilisateursAutorises(): array
{
  $users = getAllUtilisateurs();

  return [];
  // foreach ($users as $user) {
  //   if ($user a tout ok) // À toi de trouver les bons tests
  //   Ta function ne doit laisser passer que Jack ;-)...
  //   $autorised[] = $u;
  // }

  /*
           return (unset) ($user < 18) OR filter_var($email, !FILTER_VALIDATE_EMAIL);
           // NB: On ne demande pas de tester la validité du email, juste si il existe ou pas... ;-)
   */
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
