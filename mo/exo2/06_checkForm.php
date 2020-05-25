<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}

$datas = [
  'valide'    => false,
  'nom'       => 'SECK',
  'prenom'    => 'Momo',
  'CP'        => '1000',
  'naissance' => 29 / 07 / 1986,
  'banque'    => 'BE15 1234 5678 9012',
];

$form = [
  [
    'nom'       => 'Dupond',
    'prenom'    => 'Jean',
    'CP'        => 4020,
    'naissance' => '29/02/2020',
    'banque'    => 'BE40 1235 2255 8889',
  ],
  [
    'nom'       => 'Dupond',
    'prenom'    => 'Jean',
    'CP'        => '4020',
    'naissance' => '3/03/1979',
    'banque'    => 'BE40 1235 2255 8889',
  ],
  [
    'nom'       => 'Dupond5',
    'prenom'    => 'Jean$',
    'CP'        => 999,
    'naissance' => '28/02/1979',
    'banque'    => 'BE40 ABCS 2255 8889',
  ],
];
//vdli($data);

function check_form($data)
{
  //$datas = [];

  foreach ($data as $k => $dat) {
    //echo $k. " : " .$dat."<br/>";
    $valide  = true;
    $message = [];

    // condition pour le valide  ==> ca  ne marche pas
    if ('valide' === $k) {
      if (is_bool($dat)) {
        echo $dat = true." == > ${k}<br/>";
      } else {
        echo $message = "Ceci n'est pas un boolen<br/>";
      }
    } else {
      $message = "Ceci n'est pas un boolen<br/>";
    }
    // condition pour le nom
    if ('nom' === $k) {
      if (preg_match('#^[A-Za-z -]*$#', $dat)) {
        echo $dat = true." == > ${k}<br/>";
      } else {
        echo $message = "Votre nom : '${dat}' n'est pas valide<br/>";
      }
    }
    //condition pour le prenom
    if ('prenom' === $k) {
      if (preg_match('#^[A-Za-z -]*$#', $dat)) {
        echo $dat = true." == > ${k}<br/>";
      } else {
        echo $message = "Votre prenom : '${dat}' n'est pas valide <br/>";
      }
    }

    // condition pour CP   || j'essaie avec get_between
    if ('CP' === $k) { // Essaie plutôt ce genre de solution + simple... :
        //$v['CP']['valide']  = (bool) ($data['CP'] > 999 && $data['CP'] < 9999);
        //$v['CP']['message'] = ($v['CP']['valide']) ? false : $data['CP'].' est un CP invalide';
        if ($dat > 999 && $dat < 9999) {
          echo $dat = true." == > ${k}<br/>";
        } else {
          echo $message = "Votre CP : '${dat}' n'est pas valide <br/>";
        }
    }

    //condition pour naissance
    if ('naissance' === $k) {
      /*if(preg_match('#^[0-9]{1,2}/[0-9]{1,2}/[0-9]{1,4}$#', $dat))
      {
          echo $dat = true;
      }else{
          echo $message = "Votre naissance : '$dat' n'est pas valide <br/>";
      }*/
      //avec la fonction substr le booleen est verifie
      if (substr(substr($dat, 6, 2).'/'.substr($dat, 4, 2).'/'.substr($dat, 0, 4), $dat)) {
        echo $dat = true." == > ${k}<br/>";
      } else {
        echo $message = "Votre naissance : '${dat}' n'est pas valide <br/>";
      }
      //echo date($dat, date("d-m-Y"))."<br/>";
        //echo $k.' ==> '.date("d/m/Y");
        //echo date("d/m/Y", strtotime("2008-04-09"));
    }

    //condition pour banque
    if ('banque' === $k) {
      if (preg_match('#^BE[0-9]{2}( ?[0-9]{4}){3}$#', $dat)) {
        echo $dat = true." == > ${k}<br/>";
      } else {
        echo $message = "Votre banque : '${dat}' n'est pas valide <br/>";
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
