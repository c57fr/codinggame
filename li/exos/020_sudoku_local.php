Exo 020: Sudoku Validator.
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu x.debug ds chrome

// https://www.codingame.com/ide/puzzle/sudoku-validator

// Reconstitution Test 1

$g = '123456789456789123789123456912345678345678912678912345891234567234567891567891234';
$g = '435269781682571493897134562126895347374682915951743628519326874248957136763418259'; // subgrid error

for ($i = 0; $i < 9; ++$i) { // Juste pour afficher grid de départ
  $ls[] = substr($g, $i * 9, 9); // Lignes
}
vdli($ls);

function affH()
{
  global $h;
  for ($i = 1; $i < 27; ++$i) {
    echo 'Chiffre '.$i.' : ';
    foreach ($h[$i] as $k => $v) {
      echo $v;
    }
    echo '<br>';
  }
  echo '<hr>';
}

$h = array_fill(0, 27, array_fill(1, 9, 0));

for ($i = 0; $i < 9; ++$i) {
  $row = str_split(substr($g, $i * 9, 9));
  for ($j = 0; $j < 9; ++$j) {
    $h[$i][$row[$j]]                                       = 1;
    $h[9 + $j][$row[$j]]                                   = 1;
    $h[18 + (intdiv($j, 3) + intdiv($i, 3) * 3)][$row[$j]] = 1;
    // echo $i.' - '.$j.' => '.$row[$j].' ('.intdiv($j, 3).' - '.intdiv($i, 3).')<hr>';
  }
}
affH();
// vdli($h);
echo array_sum(array_map('array_sum', $h)) < 27 * 9 ? 'false' : 'true';

exit;

// Soluce 1

/*
// Init matrice
for ($i = 0; $i < 9; ++$i) {
  $ls[] = substr($g, $i * 9, 9); // Lignes
  for ($j = 0; $j < 9; ++$j) {
    $m[$i][$j] = $ls[$i][$j];
  }
}

$sgs = range(0, 9); // SubGrids
$sgs = array_fill(0, 9, '');

for ($i = 0; $i < 9; ++$i) {
  for ($j = 0; $j < 9; ++$j) {
    $cs[$j][$i] = $ls[$i][$j];
  }
}
// SubGrids
for ($i = 0; $i < 9; ++$i) {
  for ($j = 0; $j < 9; $j += 3) {
    $sgs[$i] .= substr($ls[$i], $j, 3);
  }
}

foreach ($sgs as $k => $v) {
  $sg = str_split($v); // SubGrid
  sort($sg);
  $sgs[$k] = implode('', $sg);
}

$ctrlr = implode('', range(1, 9));
$om = $m;
for ($i = 0; $i < 9; ++$i) {
  sort($om[$i]); // Lignes
  sort($cs[$i]); // Colonnes
  if (implode('', $om[$i]) !== $ctrlr || implode('', $cs[$i]) !== $ctrlr || $sgs[$i] != $ctrlr ){
    $err = false;
    break;
  }
}
echo ($err ?? true)."\n";

exit;

*/

// Init matrice
for ($i = 0; $i < 9; ++$i) {
  $ls[] = substr($g, $i * 9, 9); // Lignes
  for ($j = 0; $j < 9; ++$j) {
    $m[$i][$j] = $ls[$i][$j];
  }
}
vdli($ls);
// affMij($m);
// affMij($ls);
// echo '<hr>';

$sgs = range(0, 9); // sub grids
$sgs = array_fill(0, 9, '');
// vdli($sgs);

// exit;
// Columns
for ($i = 0; $i < 9; ++$i) {
  for ($j = 0; $j < 9; ++$j) {
    $cs[$j][$i] = $ls[$i][$j];
  }
}

// affMij($cs);

// Subgrids
$n = 0;
for ($i = 0; $i < 7; $i += 3) {
  for ($j = 0; $j < 7; $j += 3) {
    $sgs[$n] .= substr($ls[$i], $j, 3).substr($ls[$i + 1], $j, 3).substr($ls[$i + 2], $j, 3);
    ++$n;
  }
}
vdli($sgs);
// exit;
foreach ($sgs as $k => $v) {
  $sg = str_split($v); // Sub Grid
  sort($sg);
  $sgs[$k] = implode('', $sg);
  // vdli($sg);
}

// echo $sgs[3];
// echo '<hr>';
// affMij($sgs);
// vdli($sgs);

$ctrlr = implode('', range(1, 9));
// vdli(strlen($ctrlr));
$om = $m;
for ($i = 0; $i < 9; ++$i) {
  sort($om[$i]); // Lignes
  sort($cs[$i]); // Colonnes
  if (implode('', $om[$i]) !== $ctrlr || implode('', $cs[$i]) !== $ctrlr || $sgs[$i] !== $ctrlr) {
    $err = 'false';

    break;
  }
}
echo $err ?? 'true';
echo '<hr>';

// vdli($om);

//##################################################################
/*

Solution dans codding :



<?php

<?php
$h = array_fill(0,27,array_fill(1,9,0));
for ($i = 0; $i < 9; $i++) {
    $row = explode(" ",trim(fgets(STDIN)));
    for($j = 0; $j < 9; $j++) {
        $h[$i][$row[$j]] = 1;   $h[9+$j][$row[$j]] = 1;
        $h[18+(intdiv($j,3)+intdiv($i,3)*3)][$row[$j]] = 1;
    }
}
echo array_sum(array_map("array_sum",$h)) < 27*9 ? "false" : "true";


*/
