<?php

declare(strict_types= 1);


function addition(float $a, float $b){
    echo $a. " + " .$b. " = " .($a + $b). "<br/>";
}

addition(3, 4);
addition(3, 4.5);
addition(3.5, 4.2);
addition(3, '4Pierre');
addition(3, 'Pierre');