<?php
declare(strict_types= 1);

function multreturn($a, $b) :int{
    return $a * $b;
}


echo multreturn(2, 4);
echo "<br><br>";
echo multreturn(2, 2.4);