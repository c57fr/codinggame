<?php
$moi = fopen("compteurPerso.txt", "r+1");
$nbvisites = fgets($moi, 34);
$nbvisites++;
fseek($moi,0);
fputs($moi, $nbvisites);
fclose($moi);
print("$nbvisites visiteurs");