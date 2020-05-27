Exo 017: Lumen.
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu xd.ebug ds chrome

// https://www.codingame.com/training/easy/lumen

// Reconstitution test 1

$N=5;
$L=3;
$LINES=[
  'X X X X X',
  'X C X X X',
  'X X X X X',
  'X X X X X',
  'X X X X X'
];

vdli($LINES);

//##################################################################
/*

Solution dans codding :

<?php



*/
