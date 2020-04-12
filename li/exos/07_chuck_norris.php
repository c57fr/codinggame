Exo 07: Chuck NORRIS.<hr>

<?php

// https://www.codingame.com/training/easy/chuck-norris

$MESSAGE = 'CC';

$cesar = function ($MESSAGE) {
  $carbin = '';
  $msg    = str_split($MESSAGE);
  foreach ($msg as $let) {
    $carbin .= decbin(ord($let));
    vdli($carbin);
    $carbin = str_pad($carbin, 7, '0',STR_PAD_LEFT);
    vdli($carbin);
  }
  // $len     = strlen($carbin);
  // vdli($len);
  // $carbin = '456';
  // var_dump($carbin);
  // vdli($carbin);
  $carbin = str_replace('01', '0x1', $carbin);
  $carbin = str_replace('10', '1x0', $carbin);
  // echo '<br>';
  // var_dump($carbin);
  // echo '<br>';
  // $carbin = '1x0000x11';
  // var_dump($carbin);
  // exit;

  $bbins = explode('x', $carbin);
  // vdli($bbins);
  $rep = '';

  foreach ($bbins as $i => $v) {
    // vdli($v);
    $rep .= (($v[0] * 1) ? ' 0 ' : ' 00 ').str_repeat('0', strlen($v)).' ';
  }

  return trim($rep);
};

// $tab = str_split($MESSAGE);
// vdli($tab);

echo $cesar($MESSAGE)."\n";

// echo '<hr>';
// var_dump('0 0 00 0000 0 000 00 0000 0 00');

//////////////////////////////////////////////////////////////

/*
Solution dans codding : Même code sauf $MESSAGE = 'CC';

<?php




*/
