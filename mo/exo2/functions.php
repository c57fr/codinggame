<?php

function test($a, $b){
    echo $a. " + " .$b. " = " .($a + $b)."<br/>";
}

function addition(float $a, float $b){
    echo $a. " + " .$b. " = " .($a + $b). "<br/>";
}

test(3, 4);
test(3, '4Pierre');
test(3, 'Pierre');
addition(3, 4);
addition(3, 4.5);
addition(3.5, 4.2);
addition(3, '4Pierre');
addition(3, 'Pierre');