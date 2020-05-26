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
$pseudoRandomNumber = 7;
$message            = 'WEATHERREPORTWINDYTODAY'; // AAA => KQF - ABCD => KFDI
$message            = 'AAA'; // AAA => KQF - ABCD => KFDI
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
// exit;

for ($i = 0, $c = strlen($message); $i < $c; ++$i) {
  $let[$i] = chr((ord($message[$i]) + $i + $pseudoRandomNumber % 26));
  for ($j = 0; $j < 3; ++$j) {
    $let[$i] = $rotors[$j][ord($let[$i]) - 65];
  }
}
// vdli($let);
echo implode('', $let)."\n";
//##################################################################
/*

Solution dans codding :

<?php



*/
