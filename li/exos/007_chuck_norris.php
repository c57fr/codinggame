Exo 007: Chuck NORRIS.<hr>

<?php
if (!function_exists('vdli')) include '../../dev/vdli.php';

// https://www.codingame.com/training/easy/chuck-norris

$MESSAGE = '%';

$cesar = function ($MESSAGE) {
  $carbin = '';
  $msg    = str_split($MESSAGE);
  foreach ($msg as $let) {
    $carbin .= decbin(ord($let));
    vdli($carbin);
    $carbin = str_pad($carbin, 7, '0', STR_PAD_LEFT);
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

echo '<hr><h2>La + condensée</h2>';

echo rtrim(preg_replace_callback('@(.)\1*@', function ($m) {
  return ($m[1] ? '0' : '00').' '.str_repeat('0', strlen($m[0])).' ';
}, preg_replace_callback('@.@', function ($m) {
  return sprintf('%07b', ord($m[0]));
}, $MESSAGE)));


echo '<hr><h2>Méthode avec Regex</h2>';

$binMessage = null;

for ($i = 0, $c = strlen($MESSAGE); $i < $c; $i++) {
    $binMessage .= (string) str_pad(decbin(ord($MESSAGE[$i])), 7, '0', STR_PAD_LEFT);    
  }   

$outMessage = trim(preg_replace(
    array('/(0{1,})/', '/(1{1,})/', '/1/'), 
    array('00 $1 ', '0 $1 ', '0'), 
    $binMessage
));

echo($outMessage."\n");

echo '<hr><h2>Méthode calcul / bit (La plus rapide)</h2>';

$out = "";
// test first bit
$prevBit = (ord($MESSAGE{0}) & 0b1000000) != 0;
// and add it to output
$out .= $prevBit ? "0 " : "00 ";
for ( $i = 0 ; $i < strlen($MESSAGE) ; $i++ ) {
    $c = ord($MESSAGE{$i});
    for ($mask = 0b1000000; $mask != 0; $mask >>= 1) {
        $bit = ($c & $mask) != 0;
        if ( $bit == $prevBit ) {
            // add one 0 for RLE
            $out .= "0";
        } else if ( $bit ) {
            // new sequence of 1s with at least one 1
            $out .= " 0 0";
        } else {
            $out .= " 00 0";
        }
        $prevBit = $bit;
    }
}
print($out);


//////////////////////////////////////////////////////////////

/*
Solution dans codding : Mêmes codes sauf $MESSAGE = 'CC';

<?php




*/
