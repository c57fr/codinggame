<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}

function distance($x1, $x2, $y1, $y2)
{
  $res = sqrt($x2 - $x1)($x2 + $x1) + sqrt($y2 - $y1)($y2 + $y1);

  return count($res);
}

vdli(distance(0, 1, 0, 1));

// https://www.codingame.com/playgrounds/41820/exercice-php---base/exercice-7

