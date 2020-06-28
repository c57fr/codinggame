<?php
$fd = fopen("texte.txt", "r");
$enregistrement = fgets($fd, 455);
fclose($fd);

echo 'Le fichier texte contient : '.$enregistrement;