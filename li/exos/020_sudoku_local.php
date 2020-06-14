Exo 020: Sudoku Validator.
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu x.debug ds chrome

// https://www.codingame.com/ide/puzzle/sudoku-validator

// Reconstitution Test 1

// echo implode('', range(1, 9));

$ch = '123456789456789123789123456912345678345678912678912345891234567234567891567891234';
$m  = [];
for ($i = 0; $i < 9; ++$i) {
  $ls[] = substr($ch, $i * 9, 9);
  for ($j = 0; $j < 9; ++$j) {
    $m[$i][$j] = $ls[$i][$j];
  }
}
vdli($m);

  // $l = explode(' ', $v);
  // vdli($l);
  // foreach ($l as $n) {
  //   echo $n.' x ';
  // }
  // echo '<br>';
// vdli($ls);

echo '<hr>';

// echo '<div style="color:blue">0</div>';

//##################################################################
/*

Solution dans codding :



<?php




*/
