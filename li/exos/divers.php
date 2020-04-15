<?php

include './../../dev/vdli.php';

// À faire dans l'ordre

// https://www.codingame.com/playgrounds/32339/exercices-de-php-pour-debutant

// https://www.codingame.com/playgrounds/41820/exercice-php---base/exercice-1

function init_table($n, $m, $min, $max)
{
  $tab = [];
  for ($y = 0; $y < $m; ++$y) {
    for ($x = 0; $x < $n; ++$x) {
      $v            = rand($min, $max);
      $tab[$x][$y]  = $v;
      $tab['all'][] = $v;
    }
    echo '<br>';
  }

  return $tab;
}

function search_val($tab)
{
  $ts = ['neg', 'pos', 'zero'];
  foreach ($ts as $t) {
    $nomvar    = 'nb_'.$t;
    ${$nomvar} = 0;
  }

  foreach ($tab['all'] as $t) {
    echo $t;
    $nb_neg += ($t < 0);
    $nb_pos += ($t > 0);
    $nb_zero += 0 === $t;
  }

  return [
    'neg' => $nb_neg,
    'pos' => $nb_pos,
    '=0'  => $nb_zero,
  ];
  // return $tab;
}
$tab = init_table(3, 2, -2, 3);
// $tab = [
  //   [-2, 3],
  //   [3, 0],
  //   [-2, 1],
  // ];

vdli($tab); // -2 3 3 0 -2 1

// $tab = [-2, 3, 3, 0, -2, 1];
// vdli($tab);
// vdli($tab);
vdli(search_val($tab));

// -----------------------------------------------------------
function check_form($data)
{
  $cvs = [
    'nom'       => '#^[A-Za-z -]*$#',
    'prenom'    => '#^[A-Za-z -]*$#',
    'naissance' => '#^[0-9]{1,2}/[0-9]{1,2}/[0-9]{1,4}$#',
    'banque'    => '#^BE[0-9]{2}( ?[0-9]{4}){3}$#',
  ];

  foreach ($cvs as $cv => $kcv) {
    $v[$cv]['valide']  = (bool) preg_match($kcv, $data[$cv]);
    $v[$cv]['message'] = ($v[$cv]['valide']) ? ucfirst($cv).' est valide' : false;
  }
  $v['CP']['valide']  = (bool) ($data['CP'] > 999 && $data['CP'] < 1e4);
  $v['CP']['message'] = ($v['CP']['valide']) ? 'CP est valide' : false;

  // vdli($cvs);
  $cvs['CP'] = '';
  vdli($cvs);
  $v['valide'] = 1;
  foreach ($cvs as $kcv => $cv) {
    //  var_dump($v[$kcv]['valide']);
    $v['valide'] *= $v[$kcv]['valide'];
  }

  return $v;
}

$data = [
  'nom'       => 'Cote',
  'prenom'    => 'Lio',
  'CP'        => '5410',
  'naissance' => '20/03/1965',
  'banque'    => 'BE15 1234 5678 9012',
];

// vdli($data);
// echo '<pre>';
// print_r(check_form($data));
// echo '</pre>';
