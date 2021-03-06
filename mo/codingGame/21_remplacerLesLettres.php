<?php

function remplacerLesLettres($search, $trouve, $phrase)
{
  return strtr($phrase, array_combine($search, $trouve));
}

function remplacerLesLettresLi($str)
{
  return str_ireplace('o', '0', str_ireplace('e', '3', str_ireplace('i', '1', $str)));
}

$phrase = 'L3s c0urs d3 pr0grammat10n W3b s0nt tr0ps c00ls';
$search = ['e', 'i', 'o'];
$trouve = ['3', '1', '0'];

print_r(remplacerLesLettresLi($phrase));

echo '<hr>';

$var = 'momo a dit bonjour tout le monde';
echo str_ireplace('o', '0', str_ireplace('m', 'M', str_ireplace('d', 'D', $var)));

// Créer une fonction from scratch qui s'appelle remplacerLesLettres(). Elle prendra un argument de type string. Elle devra retourner cette même string mais en remplacant les e par des 3, les i par des 1 et les o par des 0 Exemple :

/*$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
echo $onlyconsonants;
echo "<hr>";

$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

$newphrase = str_replace($healthy, $yummy, $phrase);
echo $newphrase;

echo "<hr>";

$search  = array('A', 'B', 'C', 'D', 'E');
$replace = array('B', 'C', 'D', 'E', 'F');
$subject = 'A';
echo str_replace($search, $replace, $subject);

echo "<hr>";

$var = 'ABCDEFGH:/MNRPQR/';
echo "Original : $var<hr />\n";

// Remplace toute la chaîne $var par 'bob'.
echo substr_replace($var, 'bob', 0) . "<br />\n";
echo substr_replace($var, 'bob', 0, strlen($var)) . "<br />\n";

echo "<hr>";

echo substr_replace($var, 'bob', 10, -1) . "<br />\n";
echo substr_replace($var, 'bob', -7, -1) . "<br />\n";*/
