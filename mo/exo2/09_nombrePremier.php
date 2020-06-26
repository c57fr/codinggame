<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}

function premiers($n)
{
  for ($i = 2; $i < $n / 2; ++$i) {
    //echo $i."<br>";
    if (0 === $n % $i) {
      return false;
    }
  }

  return true;
}

echo '<br>Nombre premier de 0 à 100: ';
for ($i = 3; $i < 100; ++$i) {
  if (premiers($i)) {
    echo $i.' ';
  }
}

// un nombre premier est un nombre divisible par 1 et par lui-meme. Il faut savoir que 1 n'est pas un nombre premier
//https://www.codingame.com/playgrounds/41820/exercice-php---base/exercice-9
