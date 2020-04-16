Exo 011: Order of Succession.<hr>
<?php
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
  [
    0 => 'Mimi',
    1 => 'Isla',
    2 => 2014,
    3 => '-',
    4 => 'Anglican',
    5 => 'F',
  ],
];

$ms[0]['bg'] = 1;
$ms[0]['bd'] = 2;

foreach ($ms as $k => $v) {
  $ms['noms'][]    = $v[0];
  $ms['parents'][] = $v[1];
}

vdli($ms['noms']);
// vdli($ms['parents']);
$genealogy = array_combine($ms['noms'], $ms['parents']);
// vdli($genealogy);
// vdli(array_count_values($genealogy)); // nb enfants

// Upline de $id
$uplines = function ($id) use ($ms) {
  do {
    $p         = array_search($ms['parents'][$id], $ms['noms'], true);
    $uplines[] = $p;
    $id        = $p;
  } while ($p);

  return $uplines;
};

vdli($uplines(18));
vdli(count($uplines(18)));

exit;

$ms[1]['bg'] = $ms[0]['bg'] + 1;
$ms[1]['bd'] = $ms[1]['bg'] + 1;
$ms[0]['bd'] = $ms[0]['bd'] + 2;

$getParent = function ($m) use ($ms) {
  return $ms[$ms['parents'][$m]];
};

    // Upline de Georges // id 3

// echo $getParent(4);
// $ms[1]<>'-'

foreach ($ms as $k => $v) {
  vdli([$k, $v[0], $v['bg'] ?? '', $v['bd'] ?? '']);
}
//////////////////////////////////////////////////////////////
/*
Solution dans codding : Même code

<?php




*/
