<?php
$fd = fopen("xtexte.txt", "r");
$enregistrement = fgets($fd, 455);
fclose($fd);

echo 'Le fichier texte contient : '.$enregistrement;