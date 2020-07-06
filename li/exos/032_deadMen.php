<?php

if (getenv('local')) {
  echo '032 - Dead men\'s shot.<hr>';

  // echo 100/(0?:2);
  // exit;

  // Exemple 1 (Triangle)
  $pts = [[0, 0], [4, 4], [8, 0]];
  // Pt étudié (3, 2) (Shot)
  $xs = 3;
  $ys = 2;

  // Exemple 2 (Carré)
  $pts = [[3, 10], [3, 14], [8, 14], [8, 10]];
  // Pt étudié (3, 2) (Shot)
  $xs = 9;
  $ys = 13;

  array_push($pts, $pts[0]);
//   vdli($pts);

//   vdli($pts = array_slice($pts, 1));

  $i = 0; // Boucle pour chaque droite porteuse du segment défini par 2 points successifs
  // 2fix Équation de la droite D0: x=3; (Pour exemple du carré)
  $p = (0 !== $pts[$i + 1][1] - $pts[$i][1]) ? ($pts[$i + 1][0] - $pts[$i][0]) / ($pts[$i + 1][1] - $pts[$i][1]) : 0;
  echo $p;
  vdli($y0 = ($pts[$i + 1][1] - ($pts[$i + 1][0] * $p)));

  // 2do boucle pour chaque shot

  if ($p) {
    $x       = ($ys - $y0) / ($p);
    $y       = $p * $x + $y0;
    $bornesH = [$x, $y];
    vdli($bornesH);
  }

  $y = $p * $xs + $y0;
  // vdli($y);
  $x = ($p) ? ($y - $y0) / $p : $xs;
  //   vdli($x);
  $bornesV = [$x, $y];
  vdli($bornesV);

// Reconstitution T //
}
//*** https://www.codingame.com/training/easy/dead-mens-shot
//##################################################################
// https://github.com/c57fr/codinggame
// Dév. local: http://codinggame/li

// Solution validée dans coding :
/*
3 ≤ N ≤ 10 // Corners
1 ≤ M ≤ 10 // Number of shots
-10000 < x,y < 10000
*/
else {
  fscanf(STDIN, '%d', $N);
  error_log(var_export($N, true));
  for ($i = 0; $i < $N; ++$i) {
    fscanf(STDIN, '%d %d', $x, $y);
    error_log(var_export($x.' '.$y, true));
  }
  fscanf(STDIN, '%d', $M);
  error_log(var_export($M, true));
  for ($i = 0; $i < $M; ++$i) {
    fscanf(STDIN, '%d %d', $x, $y);
    error_log(var_export($x.' '.$y, true));
  }

  echo "hit_or_miss\n";
}