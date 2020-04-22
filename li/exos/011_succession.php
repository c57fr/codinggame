Exo 011: Order of Succession.<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}

// https://www.codingame.com/training/easy/order-of-succession

// Reconstitution des données du test 1

$ms = [
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
$n = count($ms);

// vdli($ms[6]);

foreach ($ms as $k => $v) {
  // $ms['parents'][] = $ms[$k][1];
  $ms['noms'][] = $v[0];
  $ms[$k][]     = $k; // Champs 6: id
  $ms[$k][]     = ($k > 0) ? array_keys(
    $ms['noms'],
    $ms[$k][1],
    true
  )[0] : '-';
  // Champs 7: idP
}

foreach ($ms as $k => $vs) {
  // vdli(array_search('Andrew', $vs, true));
}

$piduuu = function ($pere, $ms) {
  return ($pere === $v) ?? 'no';
  foreach ($ms as $k => $v) {
    $peret = ($pere === $v[0]) ?? $k;
    vdli($peret);
  }
};

$ms[0]['bg']   = 1;
$ms[0]['bd']   = 2;
$ms[0]['prof'] = 0;

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
for ($i = 0; $i < $n; ++$i) {
  vdli($ms[$i]);
}

// vdli($ms[0]);

exit;

//////////////////////////////////////////////////////////////
/*
Solution dans codding : Même code

<?php




*/
