Exo 09: Défibrillateurs.<hr>

<?php


$ch='Le soleil brille.';
echo $ch.'<br>';
$ch = preg_replace('/\bbrille\b/', 'est caché', $ch);
echo $ch.'<br>';

echo '<hr>';
$host='www.ss-dmn.boosteur.com';
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
echo "Le nom de domaine est : {$matches[0]}\n";


echo '<hr>';

$re = '/([0-9]*\,[0-9]+)/';
$str = '3,87388031141133;43,6395872778854';

// preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);
preg_match($re, $str, $matches);

// Print the entire match result
vdli($matches);



https://www.codingame.com/training/easy/defibrillators

// Reconstitution des données du test 1
$LON   = '3,879483';
$LAT   = '43,608177';
$N     = 3;
$DEFIB = [
  '0 : 1;Maison de la Prevention Sante;6 rue Maguelone 340000 Montpellier;;3,87952263361082;43,6071285339217',
  '1 : 2;Hotel de Ville;1 place Georges Freche 34267 Montpellier;;3,89652239197876;43,5987299452849',
  '2 : 3;Zoo de Lunaret;50,5 avenue Agropolis 34090 Mtp;;3,87388031141133;43,6395872778854',
];
vdli($DEFIB);
//////////////////////////////////////////////////////////////

$deg = 43.6395872778854;
// vdli($deg);
$rad = deg2rad($deg);
// vdli($rad);
$ch = $DEFIB[2];
echo ($ch).'<br><br>';

// vdli(preg_match_all('/[0-9]*\,[0-9]+/', $ch, $out));
// vdli($out); // Coordonnées du défib
echo '<hr>';
$re = '/[^.]([0-9]*\,[0-9]+)\;([0-9]*\,[0-9]+)+$/m';
$str = '1;Maison de la Prevention Sante;6,8 rue Maguelone 340000 Montpellier;;3,87952263361082;43,6071285339217';

preg_match_all($re, $ch, $matches, PREG_SET_ORDER, 0);
vdli($matches);
$subject = [$matches[0][1], $matches[0][2]];
// vdli(preg_replace('/,/', '.', $subject));
$subject = preg_replace('/,/', '.', $subject);
vdli($subject);
echo ($ch).'<br><br>';
// vdli($out); // Coordonnées du défib
// echo ($ch).'<br><br>';


/*
Solution dans codding :

<?php


*/
