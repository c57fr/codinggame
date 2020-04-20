<?php
// Créer une fonction from scratch qui s'appelle estIlMajeure(). Elle prendra un argument de type int. Elle devra retourner un boolean. Si age >= 18 elle doit retourner true si age < 18 elle doit retourner false Exemple : age = 5 ==> false age = 34 ==> true

function estIlMajeure(){
    $age = 32;
    if($age >= 18)
    {
        return "true";
    }else{
        return "false";
    }
    return $age;
}
echo estIlMajeure();

echo "<hr>";

function Majeure(){
    $age = 32;
    if($age >= 18)
    {
        echo "true";
    }else{
        echo "false";
    }
    return $age;
}
echo Majeure();