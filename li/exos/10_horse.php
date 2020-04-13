Exo 10: Chevaux de course.<hr>
<?php
// https://www.codingame.com/training/easy/horse-racing-duals

// Reconstitution des données du test 1

$N = 3;

$ps = [7, 5, 8, 9];

vdli($ps);
sort($ps);
vdli($ps);

$ecartmin=1e6;

for ($c= count($ps), $i=1; $i<$c; $i++){
    $diff = $ps[$i]-$ps[$i-1];
    $ecartmin = ($diff<$ecartmin)?$diff:$ecartmin;
    // vdli($ecart);
}
echo $ecartmin."\n";

//////////////////////////////////////////////////////////////
/*
Solution dans codding : Même code

<?php




*/
