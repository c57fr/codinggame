<?php
$fp = fopen("xcompteur.txt","r+"); // 1. on ouvrele ficher en lecture ecriture
$nbvisites = fgets($fp, 11); //2. on recupere le nombre dans le fichier fichier
$nbvisites++; // 3. on incremente le nombre de visites (+1)
fseek($fp,0); // 4. on se plqce en d2but de fichier
fputs($fp, $nbvisites);  // 5. on ecrit dans le fichier le nouveau nb
fclose($fp); // 6. on ferme le fichier
print("$nbvisites visteurs"); // on qffiche le compteur 