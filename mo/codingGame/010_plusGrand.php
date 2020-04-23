<?php

function plusGrand($argument1, $argument2)
{
  if ($argument1 > $argument2) {
    return $argument1;
    //return "$argument1 est plus grand que $argument2";
  }
  if ($argument1 < $argument2) {
    return $argument2;
  }
  //return "$argument1 est plus petit que $argument2";
  return $argument1;
}
//var_dump(plusGrand(23,15));
echo plusGrand(2, 23).'<hr>';

// Soluce Li
function plusGrandLi($a, $b)
{
  return ($a > $b) ? $a : $b;
}

echo plusGrand(27, 23);
