<?php

if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu xdebug ds chrome

// Exemple résolution Advanced Stategies
$ver = '2 1 1 1 + 1 3 3 3 + 4 7 2 + 9 3 1 + 5 2 8 + 4 2 9 + 2 2 9 + 3 5 + 6 + 3 7 + 10 + 3 5 1 + 3 1 1 1+ 1 1 1+1 1';
$hor = '2 + 1 2 1 + 4 1 2 + 6 5 + 6 3 + 4 3 + 2 9 + 1 7 + 4 5 + 4 4 + 4 7 +2 2 2 +1 3 3 + 5+7+2 5+2 4+1 4+5+3';

$ds = ['ver' => $ver, 'hor' => $hor];
vdli($ds);

$ent = explode('+', $ds['ver']);

$ent = array_map('trim', $ent); // Suppr espaces inutile suite saisie rapide

$nbv            = count($ent);


var_dump($ent[0], $ent[1]);





function isole($v)
{
  return explode(' ', $v);
}
// $ent = array_map('isole', $ent);

// $ent = array_flip(array_flip(explode(' ', $ent) ));

// array_walk($ent,'(int)');


$ent = json_encode($ent);

// $ent            = explode(' ', $ent);

// function separ($v){

//   return explode(' ', $v);
// }
// vdli(array_walk($ent, function (&$v) {
//   $v = trim($v);
//   array_map('separ', $v);
// }));
// foreach ($ent as $k => $v) {
//   $ent[$k] = (int) $v * 10;
// }

echo $nbv.' entrées ver_ticales: ';
vdli($ent);

//echo $ver.'<br>'.$hor.'<hr>';
exit;
$str = 'Lionel@l777';

$n = count_chars($str, 1);

// 2do Utiliser cette fonction à la place du regex pour même résultat que exo 18 - Mo
foreach ($n as $k => $v) {
  echo $k.' '.chr($k).' : '.$v.'<br>';
}

vdli(preg_match('/[A-Z a-z 0-9]/', $str));
// vdli($n);

// 2do: Analyse http://a.teall.info/nonogram : Solver & generator with data(JS)

// {"ver":[[1,4,3],[2,3],[2],[1],[2],[2,7],[1,7],[6],[1,4],[4]],"hor":[[2,2],[1,1],[1],[3,2],[9],[2,4],[5],[1,5],[1,5],[1,5]]}

// Et: https://fr.goobix.com/jeux-en-ligne/nonograms/?s=0 (Best designlook

// http://scc-forge.lancaster.ac.uk/open/nonogram/build (Reqssouyrce dont convertisseur image.png => data nonogram)