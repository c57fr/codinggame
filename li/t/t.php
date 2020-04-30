<?php

if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu xdebug ds chrome

// Saisie rapide des datas pour http://a.teall.info/nonogram/ (Load)
// Dans une chaine $ver (verticale), $hor (horizontale)
// + pour ajouter valeur dans la même liste
// ESP pour changer de ligne

// Exemple de https://picross.relaxweb.fr/picross/32004

$ver = '3+4 2+2+1 1+2+2 1+2+1 1+4 1+3+4 1+3+1 1+2+2 2+2+1 4+1';
$hor = '8 2+2 1+2+1 4+5 3+5 0 1+2+3 1+4 1+4 3+2';

/* GC7
{"ver":[[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0]],"hor":[[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0],[0]]}
*/

// $e = $ver = '1 2 1+1+1+1 1+1+1 1+1 1+1+1+1+1+3';

// $e = preg_replace('/\+/', 'e', $e);
// $e = preg_replace('/\s/', '+', $e);
// $e = preg_replace('/e/', ' ', $e);



// echo $liste     = $e;
// exit;

// 2do Étude de Advanced Stategies
// Exemple résolution Advanced Stategies
// Exemple de https://www.youtube.com/watch?v=LWn3Mh21tM8
// $ver = '2 1 1 1 + 1 3 3 3 +4 7 2 + 9 3 1 + 5 2 8 + 4 2 9 + 2 2 9 + 3 5 + 6 + 3 7 + 10 + 3 5 1 + 3 1 1 1+ 1 1 1+1 1';
// $hor = '2+ +1+2+1+ +4+1+2+ +6+5+ +6+3+ +4+3+ +2+9+ +1+7+ +4+5+ +4+4+ +4+7+ 2+2+2+ 1+3+3+ +5 7 2+5 2+4 1+4 5 3';

$ds = ['ver' => $ver, 'hor' => $hor];

$out = '';
foreach ($ds as $ks => $vs) {
//   vdli($vs);

  $ent = array_map('trim', explode(' ', $vs)); // Suppr espaces inutile suite saisie rapide

  // $nbv = count($ent);

  foreach ($ent as $k => $v) {
    $ent[$ks][$k] = array_map('intval', explode('+', $v));
  }

  // echo $nbv.' entrées ver_ticales:<br><br>';
//   $ents[] = '"'.$ks.'":'.json_encode($ent);
//   $ents[] = [$ks,$ent];
  ${$ks} = '"'.$ks.'":'.json_encode($ent[$ks]);
}

// Sortie du code Json
echo '{'.$ver.','.$hor.'}<hr>';

// $a = [1, 2, 3];
// $b = [11, 22, 33];

// echo implode(',', $a);

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

// Autre générateur: https://picross.relaxweb.fr/picross/32067