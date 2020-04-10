<?php
$a = 10;
$b = 2;
//echo (($a<$b) ? 'A < B': 'A>B');

/*if($a < $b){
    echo '$A est superieur a $B';
}else{
    echo 'A > B';
}*/

$a = 10;
$b = 1;
if ($a < $b) {
  echo 'A < B';
} elseif ($a > $b) {
  echo 'A>B';
} else {
  echo 'A = B';
}
echo '<hr>';
echo ($a<$b) ? 'A>B' : ($a>$b) ? 'A>B' : ' A = B';

while (TRUE)
{
    $max = 0;
    $imax = 0;
    for ($i = 0; $i < 8; $i++)
    {
        fscanf(STDIN, "%d",
            $mountainH // represents the height of one mountain, from 9 to 0. Mountain heights are provided from left to right.
        );
        if ($mountainH > $max) {
            $max = $mountainH;
            $imax = $i;
        }
    }

    echo($imax."\n");
}