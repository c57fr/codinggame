<?php

    // $enemy1: name of enemy 1
    $enemy1="Ennemi 1";
    // $dist1: distance to enemy 1
    $dist1="55";
    // $enemy2: name of enemy 2
    $enemy2="Ennemi 2";
    // $dist1: distance to enemy 1
    $dist2="50";
    
    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)
    // $nearest=(min($dist1, $dist2)=$dist1) ? $enemy1:$enemy2;

    echo ($dist1 < $dist2)? $enemy1:$enemy2;