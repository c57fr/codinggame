<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}

// http://phpdebutant.org/article14.php
// 1 fichier par leçon complètement LUE (Total 24 - Liens sur la droite)

// Tu fais marcher chaque exemple recontré dans le texte lu  (copier/coller interdit)
echo 'Bonjour le monde !';

// Séparation + mon exemple personnel
echo '<hr>';
echo 'J\'affiche un texte personnel pour utiliser ce que je viens d\'apprendre<hr>';

// Avant de continuer cette leçon, je fais un commit + push

echo ' <font face="arial" size="5" color="red">Bonjour le monde !</font> ';

// exemple perso similaire :
// ... @ toa de jouer ;-) !
echo '<hr>';
echo '<h1>Mes debuts</h1>';
// affichage d'un test avec du php
echo 'Bonjour le monde !';

echo '<hr>';
// utilisation de css et avec du html dans du php
echo '<font face="arial" size="2" color="red">Bonjour le monde !</font>';
echo '<br>';
echo '<font face="Verdana" size="6" color="orange">Big Up à tous et à toutes</font>';

echo '<hr>';
// centrage du texte et utilisation d'une div
echo '<div align="center"><font face="arial" size="2" color="blue">Bonjour le monde!</font><br/>';

// 2do Mo: Une image doit s'afficher
echo '<img src="images/daylight.jpg" border="0" width="90px" height="70px"/></div>';
echo '<br>';
echo '<div align="center"><font face="Verdana" size="9" color="green">Il fait nuit</font><br/>';
// 2do Mo: Une image doit s'afficher
echo '<img src="images/adventure.jpg" border="1" width="50px" height="50px" /></div>';
echo '<hr>';

// les guillemets
echo 'J\'utilise PHP';
echo '<br>';
echo 'Ma passion, c\'est la programmation';
echo '<div align="center"><font face="arial" size="2" color="blue"> Bonjour le monde !</font><br /> ';
echo '<img src="images/desert.jpg" border="0" width="120px" height="100px"/></div> ';
// 2do Mo: Caractères spéciaux (Effet visible dans le code source...)
