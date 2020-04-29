<?php

if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
  ob_implicit_flush(); // Pour actu xdebug ds chrome

function verificationPassword($motDePasse)
{
    if((strlen($motDePasse)) >= 8)
    {
        return (bool) true;
    }
    return (bool) false;
}
$mdp1 = 'mine';
$mdp2 = 'mouhamadou';
var_dump(verificationPassword($mdp1));
echo '<hr>';
var_dump(verificationPassword($mdp2));