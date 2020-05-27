<?php

ob_implicit_flush(); // Pour actu xdebug ds chrome
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}


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

  function check_form($data): array{
      //message d'erreur
      $mess = ["est fau"];
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
      //if($v['CP ']['valide'] = (bool) $data['CP'] > 999 && $data['CP'] < 1e4)
      if($v['CP']['valide']  = (bool) preg_match($v['CP'] > 999 && $data['CP'] < 100000))
      {
        echo $data['CP']."est valide";
      }else{
        echo "Le CP ${data['CP']} est invalide";
      }

      if($v['CP']['message'] = (bool) !preg_match($data['CP'] < 999 OR $data['CP'] > 10000))
      {
        echo "Votre CP est {$data['CP']}<br/>";
      }

      // infos pour naissance
      if($v['naissance']['valide'] = preg_match('#^([0-9]{1,2})/([0-9]{1,2})/([0-9]{1,4})$#', $data['naissance'], $vs))
      {
        echo $data['naissance']."est valide";
      }else{
        echo "Le naissance ${data['naissance']} est invalide";
      }



      /*$res = preg_match('#^([0-9]{1,2})/([0-9]{1,2})/([0-9]{1,4})$#', $data['naissance'], $vs);
    var_dump($data);*/

      return $v;
  }

  foreach ($form as $v) {
    vdli(check_form($v));
   
  }
  