Exo 017: Lumen.
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu xd.ebug ds chrome

// https://www.codingame.com/training/easy/lumen

// Reconstitution test 1

$N     = 5;
$L     = 3;
$LINES = [
  'X X X X X',
  'X X X C X',
  'X X X X X',
  'X X X X X',
  'X X X X X',
];

vdli($LINES);

for ($i = 0; $i < $N; ++$i) {
  $m[$i] = explode(' ', $LINES[$i]);
}

for ($i=0; $i < $N; $i++) { 
  for ($j=0; $j < $N; $j++) { 
    echo $m[$i][$j];
  }
  echo '<br>';
}


//##################################################################
/*

Solution dans codding :

<?php



*/
