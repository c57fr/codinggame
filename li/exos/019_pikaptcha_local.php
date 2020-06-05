Exo 019: DETECTIVE PIKAPTCHA EP2.
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu x.debug ds chrome

// https://www.codingame.com/ide/puzzle/detective-pikaptcha-ep2

// Étude : https://fr.wikipedia.org/wiki/Algorithme_de_parcours_en_profondeur

// Reconstitution test 1

// 5 3
// >000#
// #0#00
// 00#0#
// L

$width=5;
$height=3;
$l='>000##0#0000#0#';
$side='L';
$sens[1]='>';

preg_match('/[^0+|#+]/', $l, $p, PREG_OFFSET_CAPTURE);

echo 'Pos départ ( '.$p[0][0]. ' ) est '.$p[0][1];



// vdli($pos);
//##################################################################
/*

Solution dans codding :

<?php



*/