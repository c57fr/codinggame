<?php

include '../../dev/vdli.php'; // vdli()


// =================================================
function estIlMajeurePasGood(){

    $age = 32;
    if($age >= 18)
    {
        return "true";
    }else{
        return "false";
    }
    return $age;
}
echo estIlMajeurePasGood();
// =================================================

function estIlMajeure($age) // Reçoit l'âge en paramètre
{
    // Fait le traitement selon la valeur du param
  if ($age >= 18) { 
          return true; // Renvoit TRUE si majeur
  }

  return false;  // Renvoit FALSE si pas
}

var_dump(estIlMajeure(15)); // Affiche la réponse de la function

echo '<hr>';

function Majeure($age)
{
  if ($age >= 18) {
    return true;
  }

  return  false;
}
var_dump(Majeure(15)); echo '<hr>';

$estIlMajeure = function ($age) {
  return  !($age < 18);
};

var_dump($estIlMajeure(15));
echo '<br>';
var_dump($estIlMajeure(105));

echo '<hr>';
var_dump(1 < 2);
echo '<br>';
var_dump(1 > 2);
echo '<br>';

// Un nouvel opérateur très intéressant:
var_dump((bool) (3 <=> 3)); // false
var_dump((bool) (1 <=> 2)); // true

// Note qu'à la base:

var_dump(1 <=> 2); // -1
var_dump(3 <=> 2); // 1
var_dump(2 <=> 2); // 0



function renvoitMonArgument ($arg) {
    return $arg;
}