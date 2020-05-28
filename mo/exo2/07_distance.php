<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}

function distance($x1, $x2, $y1, $y2){
    $myArray = [$x1, $x2, $y1, $y2];
    $x = [$x1, $y1];
    $y = [$x2, $y2];
    for($x = 0; $x < [$x1, $y1]; $x++){
        vdli($x);
    }
    return $x;
}


$a = [3, 45];
$b = [5, 34];
//vdli(distance($a - $b));

















//https://www.codingame.com/playgrounds/41820/exercice-php---base/exercice-7