<!-- Exo 011: Order of Succession.<hr> -->
<?php
// ini_set('implicit_flush', true);
ob_implicit_flush();

if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}

// https://www.codingame.com/training/easy/order-of-succession

// Reconstitution des données du test 1

$msttt = [
  [
    0 => 'Elizabeth',
    1 => '-',
    2 => 1926,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],

  [
    0 => 'William',
    1 => 'Elizabeth',
    2 => 1982,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'Charles',
    1 => 'Elizabeth',
    2 => 1948,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'Anne',
    1 => 'Elizabeth',
    2 => 1930,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
];

$ms = [ // Test 1
  [
    0 => 'Elizabeth',
    1 => '-',
    2 => 1926,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'Charles',
    1 => 'Elizabeth',
    2 => 1948,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'William',
    1 => 'Charles',
    2 => 1982,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'George',
    1 => 'William',
    2 => 2013,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'Charlotte',
    1 => 'William',
    2 => 2015,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'Henry',
    1 => 'Charles',
    2 => 1980, // 1984
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
];

$ms2 = [ // Test 2
  [
    0 => 'Elizabeth',
    1 => '-',
    2 => 1926,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'Charles',
    1 => 'Elizabeth',
    2 => 1948,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'William',
    1 => 'Charles',
    2 => 1982,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'George',
    1 => 'William',
    2 => 2013,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'Charlotte',
    1 => 'William',
    2 => 2015,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'Henry',
    1 => 'Charles',
    2 => 1984,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'Andrew',
    1 => 'Elizabeth',
    2 => 1960,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'Beatrice',
    1 => 'Andrew',
    2 => 1988,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'Eugenie',
    1 => 'Andrew',
    2 => 1990,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'Edward',
    1 => 'Elizabeth',
    2 => 1964,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'James',
    1 => 'Edward',
    2 => 2007,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'Louise',
    1 => 'Edward',
    2 => 2003,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'Anne',
    1 => 'Elizabeth',
    2 => 1950,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'Peter',
    1 => 'Anne',
    2 => 1977,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'Savannah',
    1 => 'Peter',
    2 => 2010,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'Isla',
    1 => 'Peter',
    2 => 2012,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'Zara',
    1 => 'Anne',
    2 => 1981,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'Mia',
    1 => 'Zara',
    2 => 2014,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  // [
  //   0 => 'Mimi',
  //   1 => 'Isla',
  //   2 => 2014,
  //   3 => '-',
  //   4 => 'Anglican',
  //   5 => 'F',
  // ],
];

$ms3 = [ // Test 3
  [
    0 => 'KingGeorgeVI',
    1 => '-',
    2 => 1895,
    3 => '1952',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'QueenElizabethII',
    1 => 'KingGeorgeVI',
    2 => 1926,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'CharlesPrinceofWales',
    1 => 'QueenElizabethII',
    2 => 1948,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'PrinceWilliamDukeofCambridge',
    1 => 'CharlesPrinceofWales',
    2 => 1982,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'PrinceGeorgeofCambridge',
    1 => 'PrinceWilliamDukeofCambridge',
    2 => 2013,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'PrincessCharlotteofCambridge',
    1 => 'PrinceWilliamDukeofCambridge',
    2 => 2015,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'PrinceHenryofWales',
    1 => 'CharlesPrinceofWales',
    2 => 1984,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'PrinceEdwardEarlofWessex',
    1 => 'QueenElizabethII',
    2 => 1964,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'PrinceAndrewDukeofYork',
    1 => 'QueenElizabethII',
    2 => 1960,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'PrincessBeatriceofYork',
    1 => 'PrinceAndrewDukeofYork',
    2 => 1988,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'PrincessEugenieofYork',
    1 => 'PrinceAndrewDukeofYork',
    2 => 1990,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'JamesViscountSevern',
    1 => 'PrinceEdwardEarlofWessex',
    2 => 2007,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'LadyLouiseWindsor',
    1 => 'PrinceEdwardEarlofWessex',
    2 => 2003,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'AnnePrincessRoyal',
    1 => 'QueenElizabethII',
    2 => 1950,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'PeterPhillips',
    1 => 'AnnePrincessRoyal',
    2 => 1977,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'SavannahPhillips',
    1 => 'PeterPhillips',
    2 => 2010,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'IslaPhillips',
    1 => 'PeterPhillips',
    2 => 2012,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'ZaraTindall',
    1 => 'AnnePrincessRoyal',
    2 => 1981,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'MiaTindall',
    1 => 'ZaraTindall',
    2 => 2014,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'PrincessMargaretCountessofSnowdon',
    1 => 'KingGeorgeVI',
    2 => 1930,
    3 => '2002',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'DavidArmstrong-Jones2ndEarlofSnowdon',
    1 => 'PrincessMargaretCountessofSnowdon',
    2 => 1961,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'CharlesArmstrong-JonesViscountLinley',
    1 => 'DavidArmstrong-Jones2ndEarlofSnowdon',
    2 => 1999,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'LadyMargaritaArmstrong-Jones',
    1 => 'DavidArmstrong-Jones2ndEarlofSnowdon',
    2 => 2002,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'LadySarahChatto',
    1 => 'PrincessMargaretCountessofSnowdon',
    2 => 1964,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
  [
    0 => 'SamuelChatto',
    1 => 'LadySarahChatto',
    2 => 1996,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'ArthurChatto',
    1 => 'LadySarahChatto',
    2 => 1999,
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
];
$n = count($ms);

// vdli($ms);
// $nasp = function ($tab) {
//   foreach ($tab as $k => $v) {
//     $us[] = $v[0].' '.$v[2].' '.$v[5];
//   }
  // vdli($us);
// };

// $nasp($ms);
// $ms[0]['prof'] = 0;

$ms[0][6] = 0; // id
$ms[0][7] = 0; // prof
$ms[0][8] = null; // prof

$noms = array_column($ms, 0);
// $u0   = array_shift($ms);

// echo phpinfo();
// require('Var_Dump.php'); // make sure the pear package path is set in php.ini
// Var_Dump::displayInit(array('display_mode' => 'HTML4_Text'), array('mode' => 'normal','offset' => 4));

vdli($ms[1]);

for($k=1; $k<$n; $k++) {
  // $ms['parents'][] = $ms[$k][1];
  // $ms['noms'][] = $v[0];
  $ms[$k][] = $k; // Champs 6: id
  $ms[$k][] = null; // Champs 7 Prof (Ini)

  // $ms[$k][] = ($k >= 0) ? array_keys(
  //   $noms,
  //   $ms[$k][1],
  //   true
  // )[0] : '-';
  $ms[$k][] = array_search(
    $ms[$k][1],
    $noms,
    true
  );
  // Champs 8: idP

  // vdli($noms);

  // if (0 === $k) {
  //   echo'<pre>';
  //   var_dump($ms[$k]);
  //   echo'</pre>';
  // }

  // foreach ($ms as $k => $v) {
  $idp       = $ms[$k][8];
  $ms[$k][7] = (0 !== $k) ? $ms[$idp][7] + 1 : 1;
  // }

  if (3 === $k) {
    echo'<pre>';
    var_dump($ms[$k]);
    echo'</pre>';
  }
}
// array_unshift($ms, $u0);

include '011_affHierarchieSimple.php';
exit;
$profs = array_column($ms, 6);
sort($profs);
vdli($profs);
$ages = array_column($ms, 2);
// vdli($ages);
$genres = array_column($ms, 5);
// vdli($genres);

array_multisort($ms, SORT_ASC, $profs);
echo '<hr>';
include '011_affHierarchieSimple.php';
// foreach ($ms as $k => $vs) {
  //   vdli(array_search('Andrew', $vs, true));
  // }
  // vdli($ms);
  exit;
$ms[0]['bg']   = 1;
$ms[0]['bd']   = 2;
$ms[0]['prof'] = 0;

// for ($i = 1; $i < $n; ++$i) {
//   $idp            = $ms[$i][7];
//   $ms[$i]['prof'] = $ms[$idp]['prof'] + 1;
// }

// Tri // Age & Genre

$p     = 2;
$profs = array_column($ms, 'prof');
vdli($profs);

$p2 = array_keys($profs, 2, true);
vdli($p2);

$ages = array_column($ms, 2);
vdli($ages);
$genres = array_column($ms, 5);
// vdli(array_values(2, $profs));
$mstri = array_multisort($profs, $genres, SORT_DESC, $ages, $ms);

for ($i = 1; $i < $n; ++$i) {
  $idp            = $ms[$i][7];
  $ms[$i]['bg']   = $ms[$idp]['bd'];
  $ms[$i]['bd']   = $ms[$i]['bg'] + 1;
  $ms[$i]['prof'] = $ms[$idp]['prof'] + 1;

  $idp = $i;
  while ($idp > 0) {
    $idp = $ms[$idp][7];
    $ms[$idp]['bd'] += 2;
  }
}

exit;

vdli(array_column($ms, 0)); // Tableau borné nickel

// Tri et sélection des données
$profs = array_column($ms, 'prof');
$noms  = array_column($ms, 0);
$ages  = array_column($ms, 2);
$sexs  = array_column($ms, 5);
$mst   = array_multisort($profs, $sexs, SORT_DESC, $ages, $ms);

for ($i = 0; $i < $n; ++$i) {
  // echo $i.' '.$ms[$i][0].'('.$ms[$i]['bg'].'-'.$ms[$i]['bd'].'-'.$ms[$i]['prof'].")\n<br>";
  echo $ms[$i][0]."\n";
}
vdli($noms);
// $nasp($ms);

// exit;

// vdli($ms);
//////////////////////////////////////////////////////////////
/*
Solution dans codding : Même code

<?php




*/
