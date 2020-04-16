<?php

include './../../dev/vdli.php';
echo 'exo 1 : <br/>';

function bonjour($nom){
    echo 'Bonjour ' . $nom;
}

echo bonjour('Mario')."<br/>";
echo bonjour('Momo'). "<br/>";
echo '<hr>';

echo 'exo 2 : <br/>';

function hello($nom){
    return 'Bonjour ' . $nom;
}

$salutation = hello('Momo');
echo $salutation;

echo '<hr>';

echo 'exo 3 : <br/>';

function slt($nom = null){
    if($nom === null){
        return "Bonjour";
    }
    return "Bonjour " . $nom;
}
$salut = slt("Momo SECK");
echo $salut;
echo readline("ok");