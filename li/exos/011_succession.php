<!-- Exo 011: Order of Succession.<hr> -->
<?php
// ini_set('implicit_flush', true);
ob_implicit_flush();

if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}

// https://www.codingame.com/training/easy/order-of-succession

// Reconstitution des données du test 1

$mst = [
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

$ms1 = [ // Test 1
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
    5 => 'M', // M
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
    0 => 'Henry', // Henry
    1 => 'Charles',
    2 => 1984, // 1984
    3 => '-',
    4 => 'Anglican',
    5 => 'M',
  ],
  [
    0 => 'Nine',
    1 => 'Henry',
    2 => 2014,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
];

$ms = [ // Test 2
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

// Init id, prof et idp pour Elizabeth

$ms[0][6] = 0; // id
$ms[0][7] = 0; // prof
$ms[0][8] = null; // idp

$noms = array_column($ms, 0);

// vdli($ms[1]);

// Init id, prof et idp pour chaque descendant

for ($k = 1; $k < $n; ++$k) {
  $ms[$k][] = $k; // Champs 6: id
  $ms[$k][] = null; // Champs 7 Prof (Ini)

  $ms[$k][] = array_search(
    $ms[$k][1],
    $noms,
    true
  );
  // Champs 8: idP

  $idp       = $ms[$k][8];
  $ms[$k][7] = (0 !== $k) ? $ms[$idp][7] + 1 : 1;
}

include '011_affHierarchieSimple.php';
echo '<hr>';

// ---------------------------------------------------------------

// exit;
$msnt = $ms;
// vdli($msnt);

$profs  = array_column($ms, 7);
$ages   = array_column($ms, 2);
$genres = array_column($ms, 5);

$noms1 = array_column($ms, 0);
array_multisort($profs, $ages, $genres, SORT_DESC, $ms);
$noms2 = array_column($ms, 0);

// Ressource intéressante: https://lucidar.me/fr/web-dev/how-to-sort-multidimensional-array-in-php/

// vdli($ms);

  echo '<h4>Tri (Âge, puis genre)</h4>';
include '011_affHierarchieSimple.php';
echo '<hr>';

// foreach ($ms as $k => $vs) {
  //   vdli(array_search('Andrew', $vs, true));
  // }
  // vdli($ms);
  // ---------------------------------------------------------------

  // Nouvos ids

  foreach ($ms as $k => $v) {
    $ms[$k][6] = $k;
    $noms      = array_column($ms, 0);
    $ms[$k][8] = array_search(
    $ms[$k][1],
    $noms,
    true
  );
  }
//   include '011_affHierarchieSimple.php';
//   echo '<hr>';
  // Nouvelle hiérarchie
  echo '<h4>New Hierarchy</h4>';

  include '011_affHierarchieRecursive.php';

  exit;

//////////////////////////////////////////////////////////////
// Transposition en système de représentation intervallaire //
//////////////////////////////////////////////////////////////

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

//////////////////////////////////////////////////////////////
/*
Solution dans codding :

<?php

fscanf(STDIN, "%d", $n);
$tree = [];
for ($i = 0; $i < $n; $i++)
{
    $t = fscanf(STDIN, "%s %s %d %s %s %s");
    $tree[$t[1]][] = $t;
}
foreach($tree as $k => $t) {
    usort($tree[$k],function($a,$b) { 
        if($a[5] == $b[5])
            return $a[2] < $b[2] ? -1 : 1;
        else
            return $a[5] == "M" ? -1 : 1;
    });
}
function loop($p) {
    global $tree;
    if(isset($tree[$p]))
        foreach($tree[$p] as $t) {
            if($t[4] != "Catholic" && $t[3] == "-")
                echo $t[0],"\n";
            loop($t[0]);
        }
}
loop("-");


*/