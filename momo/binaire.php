<?php

$a = 1;
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
