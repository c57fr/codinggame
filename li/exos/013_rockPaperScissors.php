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
    0 => 6,
    1 => 'L',
  ],
  7 => [
    0 => 2,
    1 => 'L',
  ],
];
$N = count($js);
foreach ($js as $i=>$cp) {
  echo $i. ' : '.implode(' ', $cp). ( $i%2 ?'<hr>':'<br>');
}
// echo '<hr>';
// vdli($js);

$vs = ['CP', 'PR', 'RL', 'LS', 'SC', 'CL', 'LP', 'PS', 'SR', 'RC'];




for ($i=0; $i<$N; $i+=2)
{
    $match = [
        [$js[$i][0], $js[$i][1]], [$js[$i+1][0], $js[$i+1][1]]
    ];
    
    
    
    
vdli($match);
    
    echo $i.' : '.in_array($js[$i][1].$js[$i+1][1], $vs).'<br>';
}

vdli($vs);
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