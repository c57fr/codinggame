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
];

$ms[0]['bg'] = 1;
$ms[0]['bd'] = 2;

foreach ($ms as $k => $v) {
  $ms['noms'][]    = $v[0];
  $ms['parents'][] = $v[1];
}

vdli($ms['noms']);
vdli($ms['parents']);


// Upline de $id
$idp = function($id) use ($ms) {
   do{
       $p = array_search($ms['parents'][$id], $ms['noms'], true);
       $idps[]=$p;
       $id=$p;
    }
    while($p);
    return $idps;
};

vdli($idp(4));

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
