<?php
$eleves = [
    "CM2" => "Jean",
    "CM1" => "marc"
];
foreach ($eleves as $classe => $eleve) {
   echo "$classe - $eleve <br>";
}

echo '<hr>';
foreach ($eleves as $classe => $eleve) {
    echo $eleve ." est en classe $classe<br/>";
}
