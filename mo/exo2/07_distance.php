<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}

function distance($x1, $x2, $y1, $y2)
{
  //$x = A($x1 $y1); $y = B($x2, $y2);
  
  $res = ($x2-($x1)) * ($x2+($x1)) + ($y2 - $y1)*($y2 + $y1);
  //$res = sqrt($x2 - $x1)* sqrt($x2 + $x1) + sqrt($y2 - $y1) * sqrt($y2 + $y1);

  return sqrt( $res);
}

vdli(distance(0, 1, 0, 1));

// https://www.codingame.com/playgrounds/41820/exercice-php---base/exercice-7

/*Si l'on considère les deux points A(-5; 2) et B(4; -3) alors
AB2 = (4-(-5))2 + (-3 – 2)2
        =  (9)2 + (-5)2
        = 81 + 25
        = 106
AB = racine carrée de 106 soit environ 10,29
*/