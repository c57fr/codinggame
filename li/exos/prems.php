<?php

function affichePremiers($n)
{
  echo 'Les nombres premiers entre 0 et '.$n.' sont : ';
  $negatif = false;
  if ($n < 0) {
    $negatif = true;
    $n       = -$n;
  }

  // On prend chaque nombre entre 2 et n (0 et 1 n'étant pas premier)
  for ($i = 2; $i <= $n; ++$i) {
    $nbDiv = 0; //Et on compte le nombre de diviseur
    for ($j = 1; $j <= $i; ++$j) {
      if (0 === $i % $j) {
        ++$nbDiv;
      }
    }
    if (2 === $nbDiv) {
      //Un nombre premier est un chiffre qui ne possède que 2 diviseur (1 et
      // lui-même)
      if ($negatif) {
        echo '-';
      }
      echo $i.', ';
    }
  }
}

affichePremiers(5);
