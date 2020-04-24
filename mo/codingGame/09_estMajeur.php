<?php

include '../../dev/vdli.php'; // vdli()

// Créer une fonction from scratch qui s'appelle estIlMajeure(). Elle prendra un argument de type int. Elle devra retourner un boolean. Si age >= 18 elle doit retourner true si age < 18 elle doit retourner false Exemple : age = 5 ==> false age = 34 ==> true

function estIlMajeure($age)
{
  if ($age >= 18) {
    return true;
  }

  return false;
}
var_dump(estIlMajeure(16));

/////////////////////////////////////////////////////

// Soluce Li
$estIlMajeur = function ($n) {
  return $n > 17;
};

echo '<hr>';
var_dump($estIlMajeur(15));
echo '<br>';
var_dump($estIlMajeur(105));
