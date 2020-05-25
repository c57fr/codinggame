<?php

function premiers($n)
{
  echo 'Les '.$n.' premiers nombres premiers sont : ';

  $is = []; $i=1;
  // On prend chaque nombre entre 2 et n (0 et 1 n'étant pas premier)
  while(count($is)<$n) {
    $i++;
    $nbDiv = 0; //Et on compte le nombre de diviseur
    for ($j = 1; $j <= $i; ++$j) {
      if (0 === $i % $j) {
        ++$nbDiv;
      }
    }
    if (2 === $nbDiv) {
      //Un nombre premier est un chiffre qui ne possède que 2 diviseur (1 et lui-même)
      $is[]=$i;
    }
  }
  return $is;
}

vdli(premiers(5));
