Exo 016: Encryption/Decryption of Enigma Machine.
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu xd.ebug ds chrome

// https://www.codingame.com/training/easy/encryptiondecryption-of-enigma-machine

// Reconstitution des données du test
// t 1

// $message         : AAA => KQF - ABCD => KFDI
$operaton           = 'ENCODE';
$message            = 'AAA'; // AAA => KQF - ABCD => KFDI
$pseudoRandomNumber = 4;
// $message            = 'WEATHERREPORTWINDYTODAY'; // => ALWAURKQEQQWLRAWZHUYKVN
// $pseudoRandomNumber = 7;
$rotors             = [
  'BDFHJLCPRTXVZNYEIWGAKMUSQO',
  'AJDKSIRUXBLHWTMCQGZNPYFVOE',
  'EKMFLGDQVZNTOWYHXUSPAIBRCJ',
];

// Caesar avec 4
// AAA => EFG - AAAA => EGIK
// echo $message.'<hr>';

// $abc = range('A', 'Z');
// vdli(28%26);

// Sol Encode
for ($i = 0, $c = strlen($message); $i < $c; ++$i) {
  vdli(ord($message[$i]) + $i + $pseudoRandomNumber);
  $let[$i] = chr(((ord($message[$i])-64 + $i + $pseudoRandomNumber) % 26 +64));
  vdli($let[$i]);
  vdli(ord($let[$i])-64);
  for ($j = 0; $j < 3; ++$j) {
    $let[$i] = $rotors[$j][ord($let[$i])-65];
  }
}

// vdli($let);
echo implode('', $let)."\n";
//##################################################################
/*

Solution dans codding :

<?php



*/
