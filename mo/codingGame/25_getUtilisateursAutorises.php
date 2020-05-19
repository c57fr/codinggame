<?php

if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
} // vdli()

/**
 * Juste pour simuler cette function du test dans codingame.
 */
function getAllUtilisateurs()
{
  $allUsers =  [ // age, email, blocked
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
    if ($user->age>17 && !empty($user->email && !$user->blocked)) 

    $autorised[] = $user;

  }

  return $autorised;
}

  /*
           return (unset) ($user < 18) OR filter_var($email, !FILTER_VALIDATE_EMAIL);
           // NB: On ne demande pas de tester la validité du email, juste si il existe ou pas... ;-)
   */

vdli(getUtilisateursAutorises());

