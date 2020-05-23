<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}

$datas = [
  'valide'    => false,
  'nom'       => 'SECK10',
  'prenom'    => 'Momo3',
  'CP'        => '[1000, 9999]u',
  'naissance' => 29 /07 / 1986,
  'banque'    => 'BE15 1234 5678 9012',
];
//vdli($data);

function check_form($data)
{
  //$datas = [];

  foreach ($data as $k => $dat) 
  {
    //echo $k. " : " .$dat."<br/>";
    $valide  = true;
    $message = [];

    // condition pour le valide  ==> ca  ne marche pas
    if('valide' === $k)
    {
        if(is_bool($dat))
        {
            echo $dat;
        }else{
            echo $message = "Ceci n'est pas un boolen<br/>";
        }
    }else{
        $message = "Ceci n'est pas un boolen<br/>";
    }
    // condition pour le nom
    if ('nom' === $k) 
    {
      if (preg_match('#^[A-Za-z -]*$#', $dat)) {
        echo $dat = true;
      } else {
        echo $message = "Votre nom : '$dat' n'est pas valide<br/>";
      }
    }
    //condition pour le prenom
    if('prenom' === $k)
    {
        if(preg_match('#^[A-Za-z -]*$#', $dat))
        {
            echo $dat = true;
        }else{
            echo $message = "Votre prenom : '$dat' n'est pas valide <br/>";
        }
    }

    // condition pour CP
    if('CP' === $k)
    {
        if(in_array('CP' === $k, $data))//si je mets array_diff($k, $data) ou array_diff($k, $dat) ca marche pas
        {
            echo $dat.'<br/>';
        }else{
            echo $message = "Votre CP : '$dat' n'est pas valide <br/>";
        }
    }

    //condition pour naissance
    if('naissance' === $k)
    {
        if(preg_match('#^[0-9]{1,2}/[0-9]{1,2}/[0-9]{1,4}$#', $dat))
        {
            if(strtotime($dat))
            {
                echo $dat;
            }
            
        }else{
            echo $message = "Votre naissance : '$dat' n'est pas valide <br/>";
        }
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