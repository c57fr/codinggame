<?php

include '../../dev/vdli.php'; // vdli()

function estIlMajeure()
{
  $age = 32;
  if ($age >= 18) {
    return 'true';
  }

  return 'false';

  return $age;
}
echo estIlMajeure();

echo '<hr>';

function Majeure()
{
  $age = 32;
  if ($age >= 18) {
    echo 'true';
  } else {
    echo 'false';
  }

  return $age;
}
echo Majeure().'<hr>';

$estIlMajeure = function ($age) {
  return  !($age < 18);
};

var_dump($estIlMajeure(15));
echo '<br>';
var_dump($estIlMajeure(105));

echo '<hr>';
var_dump (1<2);
echo '<br>';
var_dump (1>2);
echo '<br>';


// Un nouvel opérateur très intéressant:
var_dump ((boolean)(3<=>3)); // false
var_dump ((boolean)(1<=>2)); // true

// Note qu'à la base:

var_dump (1<=>2); // -1
var_dump (3<=>2); // 1
var_dump (2<=>2); // 0


