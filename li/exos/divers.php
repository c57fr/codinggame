<?php

if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}

// À faire dans l'ordre

// https://www.codingame.com/playgrounds/32339/exercices-de-php-pour-debutant

// https://www.codingame.com/playgrounds/41820/exercice-php---base/exercice-1

// echo '<hr>';

function init_table($n, $m, $min, $max)
{
  $tab = [];
  for ($y = 0; $y < $m; ++$y) {
    for ($x = 0; $x < $n; ++$x) {
      $v            = rand($min, $max);
      $tab[$x][$y]  = $v;
      $tab['all'][] = $v;
    }
  }

  return $tab;
}

function search_val($tab)
{
  $ts = ['neg', 'pos', 'zero'];
  foreach ($ts as $t) {
    $nomvar = 'nb_'.$t;
    $vars[] = $nomvar;
  }
  $signes = [0, 0, 0];
  foreach ($tab['all'] as $t) {
    echo $t;
    ++$signes[($t <=> 0) + 1];
  }

  return array_combine($vars, [
    $signes[0],
    $signes[1],
    $signes[2],
  ]);
  // return $tab;
}
$tab = init_table(3, 2, -2, 3);
// $tab = [
  //   [-2, 3],
  //   [3, 0],
  //   [-2, 1],
  // ];

// vdli($tab); // -2 3 3 0 -2 1

// $tab = [-2, 3, 3, 0, -2, 1];
// vdli($tab);
// vdli($tab);
// vdli(search_val($tab));

// -----------------------------------------------------------
function check_form($data)
{
  $cvs = [
    'nom'    => '#^[A-Za-z -]*$#',
    'prenom' => '#^[A-Za-z -]*$#',
    'banque' => '#^BE[0-9]{2}( ?[0-9]{4}){3}$#',
  ];
  // 'naissance' => '#^[0-9]{1,2}/[0-9]{1,2}/[0-9]{1,4}$#',
  $msgerr = ' est invalide pour le champs ';

  foreach ($cvs as $cv => $kcv) {
    $v[$cv]['valide']  = (bool) preg_match($kcv, $data[$cv]);
    $v[$cv]['message'] = ($v[$cv]['valide']) ? false : $data[$cv].$msgerr.ucfirst($cv);
  }

  $res = preg_match('#^([0-9]{1,2})/([0-9]{1,2})/([0-9]{1,4})$#', $data['naissance'], $vs);
//    var_dump($data);
  $v['naissance']['valide']  = checkdate($vs[2], $vs[1], $vs[3]);
  $v['naissance']['message'] = ($v['naissance']['valide']) ? false : $data['naissance'].' est une date invalide';

  $v['CP']['valide']  = (bool) ($data['CP'] > 999 && $data['CP'] < 1e4);
  $v['CP']['message'] = ($v['CP']['valide']) ? false : $data['CP'].' est un CP invalide';

  // vdli($cvs);
  $cvs['CP'] = $cvs['naissance'] = '';
  // vdli($cvs);
  //   var_dump($data);

  $v['valide'] = 1;
  foreach ($cvs as $kcv => $cv) {
    var_dump($data[$kcv].': '.$v[$kcv]['valide']);
    $v['valide'] *= $v[$kcv]['valide'];
  }

  return $v;
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

foreach ($form as $v) {
  // vdli($v);
  echo '<pre>';
  vdli($v);
  print_r(check_form($v));
  echo '</pre><hr>';
}

/*
echo '<pre>';
print_r(check_form($form));
echo '</pre>';
*/
