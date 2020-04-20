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
