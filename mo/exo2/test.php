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
          echo $data['nom']." est valide";
      }else{
          echo "Le nom ${data['nom']} est invalide";
      }
      if($v['nom']['message'] =  !preg_match('#^[A-Za-z -]*$#', $data['nom']))
      {
           echo "Votre nom est {$v['nom']}";
      }

      //infos pour le prenom
      if($v['prenom']['valide'] = (bool) preg_match('#^[A-Za-z -]*$#', $data['prenom']))
      {
          echo $v['prenom']." est valide";
      }else{
          echo "Votre {$v['prenom']} est invalide";
      }
      if($v['prenom']['message'] =  !preg_match('#^[A-Za-z -]*$#', $data['prenom']))
      {
           echo "Votre nom est {$v['prenom']}";
      }


      return $v;
  }

  foreach ($form as $v) {
    vdli(check_form($v));
   
  }
  