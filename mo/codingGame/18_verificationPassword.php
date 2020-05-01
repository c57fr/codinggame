<?php

$verificationPasswordMo = function ($mp) { // Soluce Mo
  $errs = [];

  $err = 'Votre mot de passe doit avoir au ';
  if (strlen($mp) < 8) {
    $errs[] = 'Votre mot de passe doit avoir au moins 8 caractères';
  }

  if (!preg_match('/[0-9]/', $mp)) {
    $errs[] = 'Votre mot de passe doit avoir au moins un chiffre';
  }

  if (!preg_match('/[A-Z]/', $mp)) {
    $errs[] = 'Votre mot de passe doit avoir au moins 1 majuscule';
  }

  if (!preg_match('/[a-z]/', $mp)) {
    $errs[] = 'Votre mot de passe doit avoir au moins 1 minuscule';
  }
  // [%10s]\n
  $sps = str_repeat('&nbsp;', 3);

  return  (count($errs)) ? (sprintf('%s %s %s', '<p>', $sps.'- '.implode((',<br>'.$sps.' - '), $errs), '.</p>')) : 'Correct.';
};

$verificationPasswordLi = function ($mp) { // Soluce GC7
  return preg_match('/(?=.*[A-Z]+).(?=.*[a-z]+).(?=.*[0-9]+).{6,}/', $mp);
};

// @i Moins précise que ta fonction, elle a le mérite d'être concise, et de retourner précisément ce que demande l'exo... ;-)... Mais BRAVO: Le principe est dans la tienne aussi :-)

// Différents mp pour tests
$mps = [
  'mine',
  '1234567',
  '12345678',
  'abc',
  'abcdefg',
  'ABCDEFG',
  'ABCDEFGH',
  'abcABC',
  'abcdABCD',
  'mouhaMadou1', // Le seul qui a 8+ car, 1+ min et 1+ maj
];
$codeurs = ['Mo',  'Li'];
$codeurs = array_reverse($codeurs);

foreach ($codeurs as $k => $codeur) {
  echo  '<h2>'.$codeur.'</h2>';

  foreach ($mps as $mp) {
    print_r('<strong>'.$mp.'</strong> : '.${'verificationPassword'.$codeur}($mp).'<br>');
  }
  echo (!$k) ? '<br><hr>' : ''; // (!$k) = Après le premier codeur
}

/*
Créer une fonction from scratch qui s'appelle verificationPassword(). Elle prendra un argument de type string. Elle devra retourner un boolean qui vaut true si le password respecte les règles suivantes :

Faire au moins 8 caractères
Avoir au moins 1 chiffre
Avoir au moins une majuscule et une minuscule
*/