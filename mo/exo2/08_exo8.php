<?php
ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}

function init_table($n, $m, $min, $max){
    $tableau = [$n * $m];      //range($n * $m <= $min && $n * $m >= $max);

    return range($min, $max);
}

/*
$re = [4, 5];
vdli(init_table(4,5));
echo "<hr/>";

$r = 5;
$e = 15;
echo mt_rand($r,$e);

echo "<hr/>";

function rand_permute($size, $min, $max)
{
    $retval = array();
    //initialize an array of integers from $min to $max
    for($i = $min;$i <= $max;$i++)
    {
        $retval[$i] = $i;
    }

}*/


vdli(init_table(4,6,2,12));