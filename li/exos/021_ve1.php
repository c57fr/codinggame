<?php

$methode[1] = 'Méthode <strong>Double Boucle for()</strong>';

function ve1 ($A1 = 0, $N = 7) {
  $a    = array_fill(0, $N, 0);
  $a[0] = $A1;

  for ($n = 0; $n < $N - 1; ++$n) { // On ballaye tous les elts
    for ($m = $n - 1; $m >= 0; --$m) { // on ballaye à l'envers de la clé précédente au début tant que clé >=0 ( = clé existe)
      if ($a[$m] === $a[$n]) { // Si la dernière clé étudiée ($n) == 1 des clés précédente (== on l'a déjà vu)
        $a[$n + 1] = $n - $m; // on passe de 0 à la valeur de l'écart des indexes

        break; // Inutile de ballayer les autres clés précédentes, on sort de cette sous boucle
      }
    }
  }

  return $a;
};

// Bilan:
// ++ : Traduit colmportement humain natu
// -- : On stocke (dans $a) toute la séquence...
// ==>: Sans doute rapide, mais gourmande si $N élevé 