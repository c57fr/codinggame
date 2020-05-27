Exo 016: Encryption/Decryption of Enigma Machine.
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu xd.ebug ds chrome

// https://www.codingame.com/training/easy/encryptiondecryption-of-enigma-machine

// Reconstitution des données du test

$rotors = [
  'BDFHJLCPRTXVZNYEIWGAKMUSQO',
  'AJDKSIRUXBLHWTMCQGZNPYFVOE',
  'EKMFLGDQVZNTOWYHXUSPAIBRCJ',
];

// $message         : AAA => KQF - ABCD => KFDI
$operation          = 'ENCODE';
$message            = 'AAA'; // AAA => KQF - ABCD => KFDI
$pseudoRandomNumber = 4;
$message            = 'EVERYONEISWELCOMEHERE'; // => ALWAURKQEQQWLRAWZHUYKVN
$pseudoRandomNumber = 9;
$rotors             = [
  'BDFHJLCPRTXVZNYEIWGAKMUSQO',
  'AJDKSIRUXBLHWTMCQGZNPYFVOE',
  'EKMFLGDQVZNTOWYHXUSPAIBRCJ',
];

$operation          = 'DECODE';
$message            = 'PQSACVVTOISXFXCIAMQEM'; // AAA => KQF - ABCD => KFDI
$pseudoRandomNumber = 9;
// $message            = 'KQF'; // AAA => KQF - ABCD => KFDI
// $pseudoRandomNumber = 4;

echo $message.'<hr>';

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
