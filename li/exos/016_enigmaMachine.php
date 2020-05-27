Exo 016: Encryption/Decryption of Enigma Machine.
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu xd.ebug ds chrome

// https://www.codingame.com/training/easy/encryptiondecryption-of-enigma-machine

$rotors = [
  'BDFHJLCPRTXVZNYEIWGAKMUSQO',
  'AJDKSIRUXBLHWTMCQGZNPYFVOE',
  'EKMFLGDQVZNTOWYHXUSPAIBRCJ',
];

// 65 -75 = -10 =>
// 90 -75 - 26  => 67 - C

// 65 => 65
// 90 => 90
$v = 90;
echo chr($v).'<br>';

$v = 90 - 75;
$s = (($v + 13) % 26) + 65;
echo chr($s).' -  '.$s.'.<hr>';
echo ord('E').' -  '.$s.'.<hr>';

// echo $rotors[2].'<br>';

// echo 'Rép: '. chr(strpos($rotors[2], 'J' )+65);

// exit;
// Reconstitution des données du test
// t 1

// $message         : AAA => KQF - ABCD => KFDI
$operation          = 'ENCODE';
$message            = 'AAA'; // AAA => KQF - ABCD => KFDI
$pseudoRandomNumber = 4;
// $message            = 'WEATHERREPORTWINDYTODAY'; // => ALWAURKQEQQWLRAWZHUYKVN
// $pseudoRandomNumber = 7;
$rotors = [
  'BDFHJLCPRTXVZNYEIWGAKMUSQO',
  'AJDKSIRUXBLHWTMCQGZNPYFVOE',
  'EKMFLGDQVZNTOWYHXUSPAIBRCJ',
];

$operation          = 'DECODE';
$message            = 'PQSACVVTOISXFXCIAMQEM'; // AAA => KQF - ABCD => KFDI
$pseudoRandomNumber = 9;
// $message            = 'KQF'; // AAA => KQF - ABCD => KFDI
// $pseudoRandomNumber = 4;
// echo $message.'<hr>';

switch ($operation) {
  case 'ENCODE':
    for ($i = 0, $c = strlen($message); $i < $c; ++$i) {
      $let[$i] = chr(((ord($message[$i]) - 64 + $i + $pseudoRandomNumber) % 26 + 64));
      for ($j = 0; $j < 3; ++$j) {
        $let[$i] = $rotors[$j][ord($let[$i]) - 65];
      }
    }

    break;
  default:
  for ($i = 0, $c = strlen($message); $i < $c; ++$i) {
    $let[$i] = $message[$i];
    for ($j = 2; $j > -1; --$j) {
      $let[$i] = chr(strpos($rotors[$j], $let[$i]) + 65);
    }
    $let[$i] = chr((ord($let[$i]) - $i - $pseudoRandomNumber + 13) % 26 + 65);
  }

    break;
}

echo implode('', $let)."\n";
//##################################################################
/*

Solution dans codding :

<?php



*/
