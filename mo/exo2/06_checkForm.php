<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}


$form = [
    [
      'valide'    => true,
      'nom'       => 'Dupond',
      'prenom'    => 'Jean',
      'CP'        => 4020,
      'naissance' => '29/02/2020',
      'banque'    => 'BE40 1235 2255 8889',
    ]
  ];

  function check_form($data): array{
      //message d'erreur
      $mess = ["est fau"];

            // infos pour valide
      if($v['valide']['valide'] = (bool) $data['valide'])
      {
        echo $data['valide']." est valide<br/>";
      }else{
        echo "Le valide ${data['valide']} est invalide<br/>";
      }

      /*if($v['valide']['message'] !=  (bool) $data['valide'])
      {
           echo "Votre valide est ${data['valide']}<br/>";
      }*/
    // infos pour le nom
      if($v['nom']['valide'] = (bool) preg_match('#^[A-Za-z -]*$#', $data['nom']))
      {
          echo $data['nom']." est valide<br/>";
      }else{
          echo "Le nom ${data['nom']} est invalide<br/>";
      }

      if($v['nom']['message'] =  !preg_match('#^[A-Za-z -]*$#', $data['nom']))
      {
           echo "Votre nom est ${data['nom']}<br/>";
      }

      //infos pour le prenom
      if($v['prenom']['valide'] = (bool) preg_match('#^[A-Za-z -]*$#', $data['prenom']))
      {
          echo $data['prenom']." est valide<br/>";
      }else{
        echo "Le nom ${data['prenom']} est invalide<br/>";
      }

      if($v['prenom']['message'] =  !preg_match('#^[A-Za-z -]*$#', $data['prenom']))
      {
           echo "Votre nom est {$data['prenom']}<br/>";
      }


      //infos pour le CP
      $v['CP']['valide']  = (bool) ($data['CP'] > 999 && $data['CP'] < 1e4);
      $v['CP']['message'] = ($v['CP']['valide']) ? false : $data['CP'].' est un CP invalide';
      

      // infos pour naissance

      $res = preg_match('#^([0-9]{1,2})/([0-9]{1,2})/([0-9]{1,4})$#', $data['naissance'], $vs);

      $v['naissance']['valide']  = checkdate($vs[2], $vs[1], $vs[3]);
      $v['naissance']['message'] = ($v['naissance']['valide']) ? false : $data['naissance'].' est une date invalide';

      // infos pour bqnaue
      if($v['banque']['valide'] = (bool) preg_match('#^BE[0-9]{2}( ?[0-9]{4}){3}$#', $data['banque']))
      {
        echo "Votre banque ${data['banque']}<br/>";
      }else{
        echo "Le nom ${data['banque']} est invalide <br/>";
      }

      if($v['banque']['message'] = (bool) !preg_match('#^BE[0-9]{2}( ?[0-9]{4}){3}$#', $data['banque']))
      {
        echo "Votre banque ${data['banque']} <br/>";
      }

      /*$res = preg_match('#^([0-9]{1,2})/([0-9]{1,2})/([0-9]{1,4})$#', $data['naissance'], $vs);
    var_dump($data);*/

      return $v;
  }

  foreach ($form as $v) {
    vdli(check_form($v));
   
  }
  