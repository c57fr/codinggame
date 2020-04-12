Exo 07: Chuck NORRIS.<hr>

<?php

// https://www.codingame.com/training/easy/chuck-norris

$MESSAGE = 'C';

$carbin = decbin(ord($MESSAGE));
// $len     = strlen($carbin);
// vdli($len);
// $carbin = '456';

var_dump($carbin);

$carbin=str_replace('01', '0x1',$carbin);
$carbin=str_replace('10', '1x0',$carbin);


// echo '<br>';
// var_dump($carbin);
// echo '<br>';
// $carbin = '1x0000x11';
// var_dump($carbin);
// exit;

$bbins = explode('x', $carbin);
vdli($bbins);

// $car1 = array_shift($bins);
// $car1 = $bins[0];
// vdli($car1);

foreach ($bbins as $i => $v) {
  echo trim((($v[0] * 1) ? '0 ' : '00 ').str_repeat('0', strlen($v)).' ');
}

//////////////////////////////////////////////////////////////

/*
Solution dans codding :

<?php




*/
