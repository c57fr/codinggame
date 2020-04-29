Exo 013: Rock Paper Scissors (Pierre Feuille ciseaux).
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu xdebug ds chrome

// https://www.codingame.com/training/easy/rock-paper-scissors-lizard-spock

// $arr = [1, 2];
// vdli($arr);

// echo min($arr);

// exit;
// Reconstitution des données du test
// t 1
$js = [
  0 => [
    0 => 4,
    1 => 'R',
  ],
  1 => [
    0 => 1,
    1 => 'P',
  ],
  2 => [
    0 => 8,
    1 => 'P',
  ],
  3 => [
    0 => 3,
    1 => 'R',
  ],
  4 => [
    0 => 7,
    1 => 'C',
  ],
  5 => [
    0 => 5,
    1 => 'S',
  ],
  6 => [
    0 => 2,
    1 => 'L',
  ],
  7 => [
    0 => 6,
    1 => 'L',
  ],
];
// $js = [
//   0 => [
//     0 => 1,
//     1 => 'S',
//   ],
//   1 => [
//     0 => 2,
//     1 => 'S',
//   ],
// ];
$N = count($js);

// foreach ($js as $i => $rpc) {
//   echo $i.' : '.implode(' ', $rpc).($i % 2 ? '<hr>' : '<br>');
// }
// echo '<hr>';
// vdli($js);

$js_ori = $js;
$vs     = ['CP', 'PR', 'RL', 'LS', 'SC', 'CL', 'LP', 'PS', 'SR', 'RC'];

// if ($ms[$i/2][0][1] == $ms[$i/2][1][1])  echo 'Same arme';

// vdli($match);

// vdli($ms[0]);

// matches

// vdli(array_column($js, 0));

// $j = 3; // sqrt($N);
do {
//   if (1 === $j) {
//     // echo '<h1>Manche '.(3 - $j).'</h1>';
//   } // Numéro de la manche

  $ms = [];
  // ##############################    Calcul des matches
  $c = count($js);

  $ids = array_column($js, 0);
  $rpc = array_column($js, 1);

  foreach ($ids as $k => $v) {
    // echo $k.' '.$v.'<br>';
    $ms[$k / 2][] = [$ids[$k], $rpc[$k]];
  }
//   vdli($ms);

//   exit;
//     $uuu= [$id , $sfm, $js]; // Id,  ShiFuMi, Js
//     // vdli($js);
//     $ms[floor($i/2)] = [
//         [$id, $sfm]
//       ];

//   exit;
//   }

//   for ($c = count($js), $i = 0; $i < $c; $i += 2) {
//     $ms[] = [
//       [$js[$i][0], $js[$i][1]], [$js[$i + 1][0], $js[$i + 1][1]],
//     ];
//   }

  foreach ($ms as $num => $m) {
    // Gestion du combat
    // $combat = $m[0][1].$m[1][1];
    // echo '<h2>Match Num. '.$num.' ('.$combat.')</h2>';
    $joueurs = array_column($m, 0);
    $armes   = array_column($m, 1);

    // Détermination du vainqueur
    if ($armes[0] === $armes[1]) {
//   echo 'Mêmes armes';
      $v = min($joueurs);
    // $p = max($joueurs);
    } else {
      $v = $m[(int) !in_array($armes[0].$armes[1], $vs, true)][0]; // Id ds $m[]
    }
    $kv = array_search($v, $joueurs, true);
    $kp = (int) !$kv;

    $p = $joueurs[$kp];

    // vdli($v);
    // vdli($p);
    // echo '<hr>';
    // $v   = $ids[0]; // Id dans $js[]
    // $idP = (int) !$v;
    // echo '<br>'.$num.' : Perdant =  '.$idP.'<br>';
    // echo $num.' : Vainqueur =  '.$v.'<br>';

//   vdli(array_column($js, 0));
//   vdli(array_column($js_ori, 0));
// $p               = array_search($idP, $ac, true);
$victoires[$v][] = $p; // Id du perdant

unset($js[array_search($p, array_column($js_ori, 0), true)]);         // Kill perdant de $js[]

    // var_dump(array_column($js, 0));

    $finalistes = array_column($js, 0);
    echo '<strong>$js[] = '.implode(' ', $finalistes).'</strong><br>';
    // vdli(array_column($js_ori, 0));

// echo '<br>ooo<br>';

//   vdli($victoires);
  }
  $nbjs = count($js);
} while ($nbjs > 1);

echo $v."\n".'<br>';
echo implode(' ', $victoires[$v])."\n";

// vdli(array_column($js, 0));
exit;
/*
Solution dans codding :

<?php


function compute($index)
{
  global $database;
  list($line, $result) = $database[$index];
  if ($result !== false) return $result;

  list($op, $a, $b) = $line;
  $a = $a[0] == '$' ? compute((int)substr($a, 1)) : (int)$a;
  $b = $b[0] == '$' ? compute((int)substr($b, 1)) : (int)$b;

  $result = $a;
  if ($op == 'ADD') $result += $b;
  if ($op == 'SUB') $result -= $b;
  if ($op == 'MULT') $result *= $b;

  $database[$index][1] = $result;
  return $result;
}

foreach ($database as $i => $line)
  echo compute($i)."\n";


*/