<?php
ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}

function init_table($n, $m, $min, $max){

    if($n >= $min)
    {
        echo "Le min est ${min}". " : ". rand($min, $n). "<br>";
        /*for($n = 0; $n > $min; $n++)  
        {
            echo rand($min,$n);
        }*/
    }
    if($m <= $max)
    {
        echo "Le max est ${max}"." : ".  rand($max, $m). "<br>";
        /*for($m = 0; $m < $max; $m++)
        {
            echo rand($max,$m);
        }*/
    }
    echo ($n * $m)."<br>";



    /*if($n >= $min && $m <= $max)
    {
        echo  "${n}".rand($min, $n) *  "${m}".rand($max, $m);
    }*/




    /*$tableau = [];      //range($n * $m <= $min && $n * $m >= $max);
    for($i = 0; $i <= $min; $i++)
    {
        return rand($n[$i]);
    }

    for($i = 0; $i <= $max; $i++)
    {
        return rand($m[$i]);
    }
    return $tableau[] = $n * $m;*/
}

vdli(init_table(2,4,0,20));

echo "<br>";

// pour le deuxieme tableau
$tab = ['negative', 'positive', 'nulles'];
foreach($tab as $ta)
{
    echo $ta. "<br>";
    
}




//$re = [];
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

// https://www.codingame.com/playgrounds/41820/exercice-php---base/exercice-8
