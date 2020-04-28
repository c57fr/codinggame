Exo 012: Spreadsheet (Tableur).
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu xdebug ds chrome

// $ds = [0, 11, 22, 33, 44, 55];
// $d = '4';

// preg_match('/^\$(.+)/', $d, $v);
// vdli($ds[$v[1]]??$d);

// $c=['1','+', '3'];

// vdli($c);

// echo $c[0]+$c[2];

//https://www.codingame.com/training/easy/1d-spreadsheet

// Reconstitution des données du test

// var_dump( 1 + false);

// for ($i=5; $i--;) echo $i;

// $op = 'SUfB';
// $a  = 2;
// $b  = 3;

// $result1 = $a;
// if ('ADD' === $op) {
//   $result1 += $b;
// } elseif ('SUB' === $op) {
//   $result1 -= $b;
// } else {
//   $result1 *= $b;
// }

// $result = $a;
// $result = ($op == 'SUB') ? {-=$b} : 222;

// echo $result1.'<hr>'.$result;

// exit;
// $dsuuu = [
//   [ // Test 1
//     0 => 'SUB',
//     1 => '$1',
//     2 => '20',
//   ],
//   [
//     0 => 'VALUE',
//     1 => '32',
//     2 => '_',
//   ],
// ];

// function pretty_var($myArray){
//     print str_replace(array("\n"," "),array("<br>","&nbsp;"), var_export($myArray,true))."<br>";
// }

// echo pretty_var($dsuuu);
// vdli($dsuuu);

// $j = var_export($dsuuu, 1);
// var_dump($j);
// exit;

define(
  'STDINu',
  [
    'ADD $1 4',
    'VALUE 3 _',
  ]
);
include '012_t11.php';
$N = count(STDIN); // 2
// vdli($N);
// vdli(STDIN);
// exit;

for ($i = $N + 1; --$i;) {
  $ds[] = explode(' ', trim(STDIN[$i - 1]));
}
// krsort($ds);
$ds = array_reverse($ds);
// var_dump($ds);

// fscanf(STDIN, "%d", $N);
// for ($i = 0; $i < $N; $i++) $Cells[] = explode(' ', trim(fgets(STDIN)));

function calc(&$Cells, $c)
{
  list($o, $a, $b) = $Cells[$c];
  
  if ('$' === $a[0]) {
    $a = calc($Cells, substr($a, 1));
  }
  if ('$' === $b[0]) {
    $b = calc($Cells, substr($b, 1));
  }
  if ('ADD' === $o) {
    $a += $b;
  } elseif ('SUB' === $o) {
    $a -= $b;
  } elseif ('MULT' === $o) {
    $a *= $b;
  }
  $Cells[$c] = ['VALUE', $a, '_'];

  return $a;
}
for ($i = $N + 1; --$i;) {
    echo calc($ds, $i-1)."\n";
//   echo calc($ds, 0)."\n";
}

function array_value_count($match, $array)
{
  $count = 0;

  foreach ($array as $key => $value) {
    if ($value === $match) {
      ++$count;
    }
  }

  return $count;
}
function affResFalse()
{
  global $ds, $restes;
  $fs     = array_column($ds, 1);
  $restes = array_keys($fs, false, true);

  return count($restes);
  // var_dump($fs);
}

function compute($i)
{
//   affResFalse();
  global $ds;
  list($line, $result) = $ds[$i];
//   var_dump($result);
//   vdli($line);
  if (false !== $result) {
    return $result;
  }
//   list($op, $a, $b) = $line;
//   $a                = '$' === $a[0] ? compute((int) substr($a, 1)) : (int) $a;
//   $b                = '$' === $b[0] ? compute((int) substr($b, 1)) : (int) $b;

//   list($op, $a, $b) = $line;
//   $a                = '$' === $a[0] ? compute((int) substr($a, 1)) : (int) $a;
//   $b                = '$' === $b[0] ? compute((int) substr($b, 1)) : (int) $b;

  list($op, $args[1], $args[2]) = $line;

  foreach ($args as $ida => $arg) {
    $args[$ida] = '$' === $arg[0] ? compute((int) substr($arg, 1)) : (int) $arg;
  }

  $result = $args[1];
  if ('ADD' === $op) {
    $result += $args[2];
  } elseif ('SUB' === $op) {
    $result -= $args[2];
  } elseif ('MULT' === $op) {
    $result *= $args[2];
  }

  $ds[$i][1] = $result;
  $rs        = affResFalse().' ';
//   echo $rs;

  return $result;
}

foreach (array_keys($ds) as $i) {
//   echo '<hr>'.$i.'<br>';
  compute($i)."\n";
  // echo '<hr>';
  var_dump($ds[$i][1]);
}

// echo compute(0)."\n";
// 3 7

exit;
$ds = $ts = $vs = []; // datas traitements valeurs

$typeEntrees = ['operation', 'arg1', 'arg2'];
foreach ($t1 as $entree) {
  $ds[] = array_combine($typeEntrees, $entree); // datas
}
// vdli($ds);

$f = function ($arg) {
  global $vs, $flag; // Analyse cell
  preg_match('/^\$(.+)/', $arg, $v);

  if (array_key_exists(1, $v)) {
    // réf
    if (isset($vs[$v[1]])) {
      // cell exists
      $flag *= 1;
      echo 'Ref existe';

      return $vs[$v[1]];
    }
    // Pas encore
    echo 'Ref no existe';
    $flag *= 0;

    return null;
  }
  // value
  $flag *= 1;

  return $arg;
};

foreach ($ds as $k => $d) {
  $a1 = $d['arg1'];
//   $a2 = ('_' !== $d['arg2']) ? $d['arg2'] : 0;
  if (('_' !== $d['arg2'])) {
    $a2 = $d['arg2'];
  } else {
    $ds[$k]['arg2']      = $a2      = 0;
    $ds[$k]['operation'] = 'ADD';
  }

  if ($a1 === $a2 && 'SUB' === $d['operation']) {
    // echo $k.' :'.$a1.' '.$d['operation'].' '.$a2.'<br>';
    $ds[$k]['arg1']      = $ds[$k]['arg2']      = 0;
    $ds[$k]['operation'] = 'ADD';
  }
}
  // vdli($ds);

  foreach ($ds as $k => $d) {
  }
// exit;

$f = function ($arg) {
  global $vs, $flag; // Analyse cell
  preg_match('/^\$(.+)/', $arg, $v);

  if (array_key_exists(1, $v)) {
    // réf
    if (isset($vs[$v[1]])) {
      // cell exists
      $flag *= 1;
      //   echo 'Ref existe';

      return $vs[$v[1]];
    }
    // Pas encore
    // echo 'Ref no existe';
    $flag *= 0;

    return null;
  }
  // value
  $flag *= 1;

  return $arg;
};

// $boucle         = 0;
while (count($vs) < $N) {
//   ++$boucle;
  foreach ($ds as $k => $d) {
    $flag = 1;

    if (!array_key_exists($k, $vs)) {
      $a1 = $f($d['arg1']);
      $a2 = ('_' !== $d['arg2']) ? $f($d['arg2']) : false;

      switch ($d['operation']) {
  case 'VALUE':
  $vs[$k] = $a1;

  break;
  case 'ADD':
  if ($flag) {
    $vs[$k] = $a1 + $a2;
  }

  break;
  case 'SUB':
  if ($flag) {
    $vs[$k] = $a1 - $a2;
  }

  break;
  case 'MULT':
  if ($flag) {
    $vs[$k] = $a1 * $a2;
  }

  break;
  default:
  // code...
  break;
}
      //   echo $vs[$k]."\n<br>";
    }
  }
}

// vdli(count($vs));
ksort($vs);
// vdli($vs);
// echo $boucle;

vdli($vs);

// ////////////////////////////////////////////////////////////
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