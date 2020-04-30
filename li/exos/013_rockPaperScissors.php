Exo 013: Rock Paper Scissors (Pierre Feuille ciseaux).
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu xdebug ds chrome

// https://www.codingame.com/training/easy/rock-paper-scissors-lizard-spock


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

$N = count($js);

// foreach ($js as $i => $rpc) {
//   echo $i.' : '.implode(' ', $rpc).($i % 2 ? '<hr>' : '<br>');
// }
// echo '<hr>';
// vdli($js);

$js_ori = $js;
$vs     = ['CP', 'PR', 'RL', 'LS', 'SC', 'CL', 'LP', 'PS', 'SR', 'RC'];

do {

  $ms = [];
  // ##############################    Calcul des matches
  $c = count($js);

  $ids = array_column($js, 0);
  $rpc = array_column($js, 1);

  foreach ($ids as $k => $v) {
    $ms[$k / 2][] = [$ids[$k], $rpc[$k]];
  }
  
  foreach ($ms as $num => $m) {
    // Gestion du combat
    $joueurs = array_column($m, 0);
    $armes   = array_column($m, 1);

    // Détermination du vainqueur
    if ($armes[0] === $armes[1]) {
    // echo 'Mêmes armes';
      $v = min($joueurs);
    } else {
      $v = $m[(int) !in_array($armes[0].$armes[1], $vs, true)][0]; // Id ds $m[]
    }
    $kv = array_search($v, $joueurs, true);
    $kp = (int) !$kv;

    $p = $joueurs[$kp];

$victoires[$v][] = $p; // Id du perdant

unset($js[array_search($p, array_column($js_ori, 0), true)]);         // Kill perdant de $js[]

$finalistes = array_column($js, 0);
echo '<strong>$js[] = '.implode(' ', $finalistes).'</strong><br>';

}
  $nbjs = count($js);
} while ($nbjs > 1);

echo $v."\n".'<br>';
echo implode(' ', $victoires[$v])."\n";

/*
Solution dans codding :

<?php

fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++) $p[] = explode(' ', trim(fgets(STDIN)));
$rules = ['a', 'C', 'P', 'R', 'L', 'S', 'C', 'L', 'P', 'S', 'R', 'C'];
while (count($p) > 1)
{
    $p2 = array_pop($p);
    $p1 = array_pop($p);
    if ($p1[1] == $p2[1]) $a = $p1[0] < $p2[0];
    else
        for ($i = 1; $i < 12; $i++)
            if ($rules[$i - 1] == $p1[1] and $rules[$i] == $p2[1]) $a = 1;
            elseif ($rules[$i - 1] == $p2[1] and $rules[$i] == $p1[1]) $a = 0;
    if ($a)
    {
        array_unshift($p, $p1);
        @$w[$p1[0]] .=  $p2[0] . ' ';
    }
    else
    {
        array_unshift($p, $p2);
        @$w[$p2[0]] .=  $p1[0] . ' ';
    }      
}
echo $p[0][0] . "\n" . trim($w[$p[0][0]]) . "\n";
?>


*/