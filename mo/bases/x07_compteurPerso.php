<?php

$moi       = fopen('xcompteurPerso.txt', 'r+1');
$nbvisites = fgets($moi, 34);
++$nbvisites;
fseek($moi, 0);
fwrite($moi, $nbvisites);
fclose($moi);
echo "${nbvisites} visiteurs";
