<?php
$titre = $_POST['titre'];
$url = $_POST['url'];

if(empty($titre)){
    print("<center>Le '<b>Titre</b>' est vide !</center>");
    exit();
}

// verification du debut de l'URL
$verif_url = strtolower($url);
$verif_url = substr("$verif_url", 0, 7);

// On verifie les 7 premiers caracteres
if($verif_url != "http://")
    {
    print("L'URL sdoit commencer par '<b>http://</b>'");
    exit();
    }else
    {
        print("$titre: <a href=\"$url\">$url</a>");
    }
?>