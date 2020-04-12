<?php

/*$sommets = [9, 8, 7, 6, 0, 4, 3, 2];
for ($i = 0; $i < count($sommets); ++$i) {
  echo $sommets[$i];
}

echo '<hr>';
// Une façon préférable:

foreach ($sommets as $i=>$h){
    echo $sommets[$i];
}

echo '<hr>';

$sommets = [9,8,7,6,0,4,3,2];
for ($i = 0; $i < count($sommets); ++$i){
  echo $sommets[$i];
}*/
$sommets = [9, 8, 7, 6, 0, 4, 3, 2];
foreach ($sommets as $i => $h) {
  echo $sommets[$i]."<br/>";
}