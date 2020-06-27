<?php
$titre = $_POST['titre'];
$url = $_POST['url'];
$adresse = $_POST['adresse'];

if(empty($titre))
{
    print("<center>Le <b>Titre</b> est vide !</center>");
    exit();
}

// Verification de l'url
$verif_url = strtolower($url);
$verif_url = substr("$verif_url", 0, 7);

// On verifie les 7 premiers caracteres
if($verif_url != "http://")
{
    print("L'URL doit commencer par <b>http://</b>");
    exit();
}else{
    print("$titre : <a href=\"$url\">$url</a>");
}

// condition pour l'adresse
$verif_adresse = strtolower($adresse);
$verif_adresse = substr("$verif_adresse", 0, 5);

// on verifie les 5 premiers
if($verif_adresse != "Maroc")
{
    print("L'adresse doit commencer par <b>Maroc</b>");
    exit();
}else{
    print("<br>Votre adresse est <b>$adresse</b>");
}