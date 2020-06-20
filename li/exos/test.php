<?php


// vdli($a);
// vdli(array_slice($a,0,-1));
// vdli($a);

$A1 = 7;
$N  = 11;

function ve4_1($A1 = 7) // Tableau [N, index] avec yield
{
  $v = $n = $A1;
  $s=[];
  $v = [$A1, $i = 1];

  while (true) {
    if (array_key_exists($v[0], $s)) {
      $n = $i - $s[$v[0]];
    } else {
      $n = 0;
    }
    echo $i.' : ';
    yield $v[0];
    ++$i;
    $s[$v[0]] = $v[1];
    $v=[$n,$i];
  }
}

// ++$N;
foreach (ve4_1($A1) as $v) {
  echo $v.'<br>';
  if (!--$N) {
    break; // infinite loop prevent
  }
}
echo '<hr>Fini avec '.$v;

/*
// Simple yield
function compte()
{
  $i = 1;
  while (true) {
    yield $i++;
  }
}

foreach (compte() as $v) {
  echo $v.' ';
  if ($v > 9) {
  break;
  }
}
*/

/*
function ve4_1() // Tableau [N, index]
{
  $n    = 0;
  $seen = [7 => 0];
  $val  = 0;
  while (true) {
    yield $val;
    if (array_key_exists($val, $seen)) {
      $val = $seen[$val];
    } else {
      $val        = 0;
      $seen[$val] = $n;
      ++$n;
    }
  }
}

$n = 7;
foreach (ve4_1() as $v) {
  echo $v.' ';
  --$n;
  if ($n >= 0) {
    break; // infinite loop prevent
  }
}
*/
