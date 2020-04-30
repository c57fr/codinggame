<?php

if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
} // vdli()

// https://www.codingame.com/playgrounds/32339/exercices-de-php-pour-debutant

// Créer une fonction from scratch qui s'appelle verificationPassword(). Elle prendra un argument de type string. Elle devra retourner un boolean qui vaut true si le password fait au moins 8 caractères et false si moins.

$a = '7';

vdli(gettype($a)); // Là, c'est str

vdli(gettype((int) $a)); // Là, c'est integer



exit;

function verificationPassword($str)
{
  return (bool) (strlen($str) > 7);
}
  ob_implicit_flush(); // Pour actu xdebug ds chrome

/*function verificationPassword($motDePasse)
{
    if((strlen($motDePasse)) >= 8)
    {
        return (bool) true;
    }
    return (bool) false;
}*/
$mdp1 = 'mine';
$mdp2 = 'mouhamadou';
var_dump(verificationPassword($mdp1));
echo '<hr>';
var_dump(verificationPassword($mdp2));