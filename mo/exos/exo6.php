<?php
//premiere solution
$notes = [10, 20,13];
echo array_sum($notes) / count($notes);

echo "<hr>";

//deuxime solution
$sum = array_sum($notes);
$notes = count($notes);
$average = $sum / $notes;
if(is_float($average)){
    echo round($average, 2);
}else{
    echo $average;
}
echo "<hr>";

// autre exemple avec les fonctions
$note = [12, 15, 25];
$ajout = array_push($note, 89, 50);
print_r($note);

