<?php

ob_implicit_flush(); // Pour xdebug
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}

$verificationPasswordMo = function ($mp) { // Soluce Mo
  $err  = 'Votre mot de passe doit avoir au moins';
  $errs = [];
  $esp  = function ($n = 1) {
    return str_repeat('&nbsp;', $n);
  };
  $implodeLi = function ($arr) {
    if (count($arr) > 1) {
      $der = array_pop($arr);

      return implode(', ', $arr).' et '.$der;
    }

    return $arr[0];
  };

  if (strlen($mp) < 8) {
    $errs[] = '8 caractères';
  }

  if (!preg_match('/[0-9]/', $mp)) {
    $errs[] = 'un chiffre';
  }

  if (!preg_match('/[A-Z]/', $mp)) {
    $errs[] = 'une majuscule';
  }

  if (!preg_match('/[a-z]/', $mp)) {
    $errs[] = 'une minuscule';
  }

  return  ((count($errs)) ? (sprintf('%s %s', $err.$esp().$implodeLi($errs), '')) : 'Correct').'.<br>';
};

$verificationPasswordLi = function ($mp) { // Soluce GC7
  return (bool) preg_match('/(?=.*[A-Z]+).(?=.*[a-z]+).(?=.*[0-9]+).{6,}/', $mp);
};

/**
 * @i Précision:
 * Moins précise que ta fonction, elle a le mérite d'être concise, et de retourner précisément ce que demande l'exo... ;-)... Mais BRAVO: Le principe est dans la tienne aussi :-)
 */

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

// @n Créer une fonction from scratch qui s'appelle verificationPassword().
/*
Elle prendra un argument de type string. Elle devra retourner un boolean qui vaut true si le password respecte les règles suivantes :
Faire au moins 8 caractères
Avoir au moins 1 chiffre
Avoir au moins une majuscule et une minuscule
*/