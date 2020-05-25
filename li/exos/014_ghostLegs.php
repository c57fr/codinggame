Exo 014: Ghost Legs.
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu xdebug ds chrome

// https://www.codingame.com/training/easy/ghost-legs

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
$depsstr = $lines[0];
$depsstr = preg_replace('/ /', '', $depsstr);
$lr      = strlen($lines[0]);
$l       = strlen($depsstr);
$h       = count($lines);
// echo $l.' x '.$h.'<hr>';
// var_dump($depsstr);
// echo $lr;

for ($i = 0; $i < $l; ++$i) {
  $deps[] = $depsstr[$i];
}
// vdli($deps);
//
// echo '<br>'.$deps[0].'<br>';
// echo strlen($lines[2]).'<br>';
// vdli($lines);

// echo count($lines); // H
// echo strlen($lines[0]); // W
// echo strlen($lines[1]);

// echo '<pre>';
// foreach ($lines as $k => $l) {
//   echo $l.'<br>';
// }
// echo '</pre>';

echo '<pre>'.implode('<br>', $lines).'</pre>';

// Création matrice

foreach ($lines as $y => $l) {
  for ($x = 0; $x < $lr; ++$x) {
    if ('|' === $lines[$y][$x]) {
      $m[$x][] = 2;
    // if (array_key_exists($x - 1, $m) && $m[$x - 1][$y]=='-') {
      //   $m[$x][] = 1;
      // }
    } else {
      $m[$x][] = $lines[$y][$x];
    }
    // if (array_key_exists($i + 1, $m) && $m[$i + 1][$k]=='-') {
    //   $m[$i][] = 3;
    // }
  }
}

for ($x = 1; $x < $lr; $x += 3) {
  foreach ($lines as $y => $v) {
    if ('-' === $m[$x][$y]) {
      ++$m[$x - 1][$y];
    }
  }
}

for ($x = 2; $x < $lr; $x += 3) {
  foreach ($lines as $y => $v) {
    if ('-' === $m[$x][$y]) {
      --$m[$x + 1][$y];
    }
  }
}

echo '<pre>';
for ($y = 0; $y < $h; ++$y) {
  for ($x = 0; $x < $lr; $x += 3) {
    echo $m[$x][$y];
  }
  echo '<br>';
}
echo '</pre>';

foreach ($deps as $k => $v) {
  $x = $k*3;
  $y = 0;

  // echo $m[$x][$y];

  // var_dump(3 <=> 2);

  // $x = $m[$x][$y]<>2;

  for ($y = 1; $y < $h - 1; ++$y) {
    $x += (((int) $m[$x][$y]) <=> 2) * 3;
    echo $x.','.$y.'<br>';
  }
  echo $m[$k*3][0].$m[$x][$y].'<hr>';
}

// echo $m[$x][$y];
// ++$y;
// echo $m[$x][$y];

// vdli($m);

// echo $m[3][0];

// S1 Procédural

// S1 en POO

// S2 en POO

// S2 en POO

/*
public class Solution
{
  public static void Main()
  {
  //Read diagram size.
  string[] line = Console.ReadLine().Split();
  int W = int.Parse(line[0]);
  int H = int.Parse(line[1]);

  //Read top labels and create start indices.
  string[] T = Console.ReadLine().Split(new [] { "  " }, StringSplitOptions.None);
  int[] Ti = new int[T.Length];

  for (int i = 0; i < Ti.Length; i++)
  {
    Ti[i] = i;
  }

  //Read diagram lines.
  for (int i = 0; i < H - 2; i++)
  {
    line = Console.ReadLine().Split('|');

    //Search for horizontal lines.
    for (int j = 0; j < line.Length; j++)
    {
    if (line[j] == "--")
    {
      //Check where the horizontal line is and change indices.
      for (int k = 0; k < Ti.Length; k++)
      {
      if (Ti[k] == j - 1)
      {
        Ti[k] += 1;
      }
      else if (Ti[k] == j)
      {
        Ti[k] -= 1;
      }
      }
    }
    }
  }

  //Read bottom labels.
  string[] B = Console.ReadLine().Split(new [] { "  " }, StringSplitOptions.None);

  //Print result.
  for (int i = 0; i < T.Length; i++)
  {
    Console.WriteLine(T[i] + B[Ti[i]]);
  }
  }
}

###################################################################

Solution dans codding :

<?php


*/
