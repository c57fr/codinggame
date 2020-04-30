<?php

$host = 'www.ss-dmn.boosteur.com';
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
echo "Le nom de domaine est : {$matches[0]}\n";

echo '<hr>';

$ch = 'Le soleil brille.';
echo $ch.'<br>';
$ch = preg_replace('/\bbrille\b/', 'est caché', $ch);
echo $ch.'<br>';

$MESSAGE = 'C';
vdli($MESSAGE);

echo rtrim(preg_replace_callback('@(.)\1*@', function ($m) {
  return ($m[1] ? '0' : '00').' '.str_repeat('0', strlen($m[0])).' ';
}, preg_replace_callback('@.@', function ($m) {
  return sprintf('%07b', ord($m[0]));
}, $MESSAGE)));

echo '<hr>';

echo rtrim(
  preg_replace_callback(
    '@(.)\1*@',
    function ($m) {
      return ($m[1] ? '0' : '00').' '.str_repeat('0', strlen($m[0])).' ';
    },
    preg_replace_callback('@.@', function ($m) {
      return sprintf('%07b', ord($m[0]));
    }, $MESSAGE)
  )
);

echo '<hr>';

$txt = 'Mon texte est court. Ai-je les cheveux courts aussi ?';
echo $txt.'<br>';

echo preg_replace_callback('@(court)\1*@', function () {
  return 'long';
}, $txt);

echo '<hr>';

echo preg_replace_callback('@.@', function ($m) {
  return sprintf('%07b', ord($m[0]));
}, '%');

// echo rtrim(
//   preg_replace_callback('@(.)\1*@', function ($m) {
//     return ($m[1] ? '0' : '00').' '.str_repeat('0', strlen($m[0])).' ';
//   },
//   preg_replace_callback('@.@', function ($m) {
//     return sprintf('%07b', ord($m[0]));
//   }, $MESSAGE)));

echo '<hr>';

$values = [2, 3, 17, 4, 5];

function double($v)
{
  // vdli($v);
  return ($v[0] * 2).' ';
}

echo '$values = ['.implode(',', $values).'] => '.preg_replace_callback('@([^,]+)@', 'double', implode(',', $values));
// https://regex101.com/r/94TnZp/1

// vdli($values);

// Outil pour regex :
//
// http://www.gethifi.com/tools/regex

// Outil + puissant :
// https://regex101.com/r/94TnZp/1

// Très bons exemples
// https://sodocumentation.net/fr/regex/topic/343/modeles-simples-assortis

// 2do 1) Super Tuto Initiation
// https://www.lucaswillems.com/fr/articles/25/tutoriel-pour-maitriser-les-expressions-regulieres

// 2do 1) Super Tuto 1ers pas
// https://buzut.net/la-puissance-des-regex/

// 2do 2) Super Tuto complet
// https://sodocumentation.net/fr/regex/topic/259/demarrer-avec-les-expressions-regulieres

// 2do 3) Super Tuto notions approfondies
// Lookahead , + et -lookbehind et lookaround atomic
// http://www.regular-expressions.info/lookaround.html

// 2do 4= Quizz Regex
// Quizz de Regex
// https://regex101.com/quiz

// Doc: https://medium.com/factory-mind/regex-tutorial-a-simple-cheatsheet-by-examples-649dc1c3f285

// Stylesheet avec exemples
// https://www.rexegg.com/regex-quickstart.html

/*




If faut 1+ maj + 1+ min + 1+ nbr et + de 8 car
preg_match('/(?=.*[A-Z]+).(?=.*[a-z]+).(?=.*[0-9]+).{6,}/',$ch);