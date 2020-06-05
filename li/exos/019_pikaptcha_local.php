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

$width  = 5;
$height = 3;
$l      = '>000##0#0000#0#';
// $l      = '000^##0#0000#0#';
$side = 'L';

$s = ['^', '>', 'v', '<'];
$d = [-$width,1,$width,-1];
vdli($s);
vdli($d);

preg_match('/[^0+|#+]/', $l, $pos, PREG_OFFSET_CAPTURE);
exit;
echo 'Pos départ ( '.$pos[0][0].' ) est '.$pos[0][1];
$p = $pos[0][1];
// Calcul du sens
$s = $sens[$pos[0][0]];

if ('#' !== $l[$p]) {
  $p += $s;
}
if ('#' !== $l[$p]) {
  $p += $s;
}
if ('#' !== $l[$p]) {
  $p += $s;
}
if ('#' !== $l[$p]) {
  $p += $s;
}
if ('#' !== $l[$p]) {
  $p += $s;
}
if ('#' !== $l[$p]) {
  $p += $s;
}
if ('#' !== $l[$p]) {
  $p += $s;
}

vdli($s);
vdli($p);

//##################################################################
/*

Solution dans codding :

<?php



*/
