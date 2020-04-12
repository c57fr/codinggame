Exo 07: Chuck NORRIS.<hr>

<?php

// https://www.codingame.com/training/easy/chuck-norris

$MESSAGE = 'V';

$carbin = decbin(ord($MESSAGE));
// $len     = strlen($carbin);
// vdli($len);
// $carbin = '456';
var_dump($carbin);

$bins = str_split($carbin);
vdli($bins);

$car1 = array_shift($bins);
vdli($car1);
vdli($bins);

// foreach ($carbin as $k => $v) {
//   echo $k;
// }

//////////////////////////////////////////////////////////////

/*
Solution dans codding :

<?php




*/
