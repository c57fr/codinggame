<?php

// https://www.codingame.com/ide/puzzle/temperatures

$inputs = [
  '0' => -10,
  '1' => 4,
  '2' => 4,
  '3' => -14,
  '4' => -4,
];
// $inputs='';
$n       = '' !== $inputs ? count($inputs) : 0;
$nearest = function ($v) {
  return abs($v); // temperature; ecart avec 0
};

$ecarts = is_array($inputs) ? array_map($nearest, $inputs) : 0;

echo '<pre>';
vdli($ecarts);
echo '</pre>';

// echo implode(', ', $ecarts).'<hr>';

//ar_dump(min($ecarts));

$getTop0 = function ($tab, $refs) {
  $reps = [];
  $top0 = min($tab);
  vdli($top0);
  foreach ($tab as $k => $v) {
    if ($v === $top0) {
      $reps[] =$refs[$k];
    }
  }
  vdli($refs);
  vdli($reps);
  
  return max($reps);
};

echo '<hr>Température la + proche'.($n > 0) ? $getTop0($ecarts, $inputs) : 0;

//////////////////////////////////////////////////////////////
/*
Solution dans codding :

<?php

// $n: the number of temperatures to analyse
fscanf(STDIN, "%d", $n);
//error_log(var_export($n, true));
$inputs = explode(" ", fgets(STDIN));
//error_log(var_export($inputs, true));
//error_log(var_export($inputs, true));

for ($i = 0; $i < $n; $i++)
{
    $t = intval($inputs[$i]); // a temperature expressed as an integer ranging from -273 to 5526
// error_log(var_export($t, true));
    
}
$nearest = function ($v) {
  return abs($v); // temperature; ecart avec 0
};

$ecarts =is_array($inputs) ? array_map($nearest, $inputs) :0;

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

$getTop0 = function ($tab, $refs) {
  $reps = [];
  $top0 = min($tab);
  foreach ($tab as $k => $v) {
    if ($v === $top0) {
      $reps[] =$refs[$k];
    }
  }
    return max($reps);
};

echo (($n>0) ? $getTop0($ecarts, $inputs) : 0) ."\n";
?>
*/