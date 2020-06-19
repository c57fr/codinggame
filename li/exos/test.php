<?php // pneu

$deb=microtime(true);

$N  =1e4;
$NN = $N;
$n  = $i  = $A1  = 7;

while (--$NN) {
  $v = $n;
  // echo $v.' ';
  $n    = isset(${$n}) ? $i - ${$n} : 0;
  ${$v} = $i++;
}


echo nf($N).' = '."${n}\n<hr>";

echo chrono($deb,1);