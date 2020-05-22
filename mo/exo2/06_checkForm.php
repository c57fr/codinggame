<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}

$datas = [
    'valide' => true,
    'nom' => 'SECK',
    'prenom' => 'Momo',
    'CP' => "[1000, 9999]",
    'naissance' => 29/07/1986,
    'banque' => 'BE15 1234 5678 9012'
];
//vdli($data);

function check_form($data){
    //$datas = [];
   
    foreach($data as $k => $dat)
    {
        //echo $k. " : " .$dat."<br/>";
        $valide = [];
        $message = [];
        if(preg_match('#^[A-Za-z -]*$#', in_array($k=='nom', $data)))
        {
            echo $dat;
        }else{
            echo 'no';
        }
    }

}

vdli($datas);
echo '<hr>';
vdli(check_form($datas));

/*
foreach ($datas as $key => $valeur) {
    echo $key.' : '.$valeur.'<br/>';
    
}
if(array_key_exists($key, $datas))
{
    return $key;
}else{
    return $datas;
}*/


  //if(array_key_exists($datas['nom']))

/*function donnees($key, $value){
    echo "$key : $value";
}*/




//vdli(check_form($datas));

























// https://www.codingame.com/playgrounds/41820/exercice-php---base/exercice-6