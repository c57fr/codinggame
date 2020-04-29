Exo 014: Ghost Legs.
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu xdebug ds chrome

// Reconstitution des données du test
// t 1
$lines = [
  'A  B  C',
  '|  |  |',
  '|--|  |',
  '|  |--|',
  '|  |--|',
  '|  |  |',
  '1  2  3',
];
// vdli($lines);

// echo count($lines); // H
// echo strlen($lines[0]); // W
// echo strlen($lines[1]);

echo '<pre>';
foreach ($lines as $k => $l) {
  echo $l.'<br>';
}
echo '</pre>';

// Recxherche des T

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
