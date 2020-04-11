<?php

$inputs  = [-1, -2, -1, 4, 5];
$n       = count($inputs);
$nearest = function ($v) {
  return ['t'=>$v, 'e'=>abs($v)]; // temperature; ecart avec 0
};

$ecarts = array_map($nearest, $inputs);

echo '<pre>';
print_r(array_values($ecarts['e']));
echo '</pre><hr>';

echo '<pre>';
print_r($ecarts);
echo '</pre>';

echo implode(', ',$ecarts).'<hr>';

var_dump(min($ecarts));

echo (array_search(min($ecarts), $ecarts));