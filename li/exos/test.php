<?php
$NN=$N;
$t = $p = $A1;

while (--$NN)
{
    $k = $t;
    $t = isset($$t) ? $p - $$t : 0;
    $$k = $p++;
}
echo("$t\n");
