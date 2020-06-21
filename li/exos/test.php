<?php


// vdli($a);

$A1 = 7;
$N  = 11;

function ve6($An = 7, $N=11) // Tableau [N, index] avec yield
{
  foreach (range(1,$N-1) as $ii) [ $last[$An], $An ] = [ $ii, isset($last[$An]) ? $ii - $last[$An] : 0 ];
echo $An;
  
  return [];
}
$ve=ve6($A1, $N);
echo '<hr>Der: '.end($ve);

/*
fscanf(STDIN, "%d", $An);
fscanf(STDIN, "%d", $N);
foreach (range(1,$N-1) as $ii) [ $last[$An], $An ] = [ $ii, isset($last[$An]) ? $ii - $last[$An] : 0 ];
echo $An;
*/
