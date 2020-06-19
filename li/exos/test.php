<?php
$N=11;
$NN=$N;
$t = $p = $A1=7;

while (--$NN)
{
    $k = $t;
    $t = isset($$t) ? $p - $$t : 0;
    $$k = $p++;
    echo $k.' ';
}
echo("$t\n");

