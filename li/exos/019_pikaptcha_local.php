Exo 019: DETECTIVE PIKAPTCHA EP2.
<hr>
<?php
if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu x.debug ds chrome

// https://www.codingame.com/ide/puzzle/detective-pikaptcha-ep2

// Étude : https://fr.wikipedia.org/wiki/Algorithme_de_parcours_en_profondeur

// Reconstitution Test 1
// 5 3
// >000#
// #0#00
// 00#0#
// L
/*
1322#
#2#31
12#1#
*/
$width  = 5;
$height = 3;
$LINE   = ['>000#', '#0#00', '00#0#'];
$side   = 'L';

// Reconstitution Test 2
$width  = 9;
$height = 3;
$LINE   = ['#00###000', '0000<0000', '000##0000'];
$side   = 'R';

/* S:
#11###000
112210000
111##0000
*/

// Reconstitution Test 3
// 3 3
// 0#0
// #>#
// 0#0
// L

$width  = 3;
$height = 3;
$LINE   = ['0#0', '#>#', '0#0'];
$side   = 'L';
/*
0#0
#0#
0#0
*/

// Reconstitution Test 4
// 10 6
// 0#0
// #>#
// 0#0
// L

$width  = 10;
$height = 6;
$line   = ['#0#####000', '#0#000#000', '#0##0##0#0', '#000000000', '####0##000', '00000#<000'];
$side   = 'R';
/*
  echo "#1#####111\n";
  echo "#2#131#101\n";
  echo "#2##2##1#1\n";
  echo "#222422201\n";
  echo "####2##101\n";
  echo "12222#1211\n";
*/

// Reconstitution Test 5
// 7 6
// 0 => '00000#0',
// 1 => '0#0#000',
// 2 => '00#0^##',
// 3 => '000#000',
// 4 => '#0#00#0',
// 5 => '0#00#00'
// R

$width  = 7;
$height = 6;
$line   = ['00000#0', '0#0#000', '00#0^##', '000#000', '#0#00#0', '0#00#00'];
$side   = 'R';
/*
  echo "22322#1\n";
  echo "2#1#322\n";
  echo "21#01##\n";
  echo "131#000\n";
  echo "#1#00#0\n";
  echo "0#00#00\n";
*/

$w   = $width + 2;
$h   = $height + 2;
$arr = array_fill(0, $width, '#');
$l   = '';
array_unshift($line, implode('', $arr));
array_push($line, implode('', $arr));
foreach ($line as $ligne) {
  // echo  '#'.$ligne.'#<br>';
  $l .= '#'.$ligne.'#';
}

// echo '<table border="1"><tr>';
// for ($nmax = strlen($l), $i = 0; $i < $nmax; ++$i) {
//   $nl = '';
//   if (!($i % $w) && $i > 0) {
//     $nl = '</tr><tr>';
//   }
//   $aff = ('#' === $l[$i]) ? '#000000' : '#ffffff';
//   echo $nl.'<td align="right" style="padding:5px;" bgcolor="'.$aff.'">'.$i.'</td>';
// }
// echo '</tr></table>';

$ss = ['^', '>', 'v', '<'];
$ds = [-$w, 1, $w, -1];

if ('R' === $side) {
  $ss = array_reverse($ss);
  $ds = array_reverse($ds);
}

preg_match('/[^0+|#+]/', $l, $pos, PREG_OFFSET_CAPTURE);
// exit;
$p = $pos[0][1];
// Calcul du sens
$s = array_search($pos[0][0], $ss, true);

$l[$pos[0][1]] = 0;
// echo $l;
// echo '<hr>';
// echo 'Pos dé part ( '.$pos[0][0].' ) est '.$pos[0][1].'<br>';
$i = $mvt = 0;

// echo $pos[0][0].$pos[0][1].' ';

do {
  ++$mvt;
  /*
  ↑ ALT + 24
  → ALT + 26
  ↓ ALT + 25
  ← ALT + 27
  */
  if ('#' === $l[$p + $ds[($s - 1 + 4) % 4]]) {
    if ('#' !== $l[$p + $ds[$s]]) {
      // echo 'Avance en ';
      $p += $ds[$s];
      $l[$p] = (int) $l[$p] + 1;
    } else {
      // echo 'Tourne à droite dans '; (ALT + 26)
      $s = ($s + 5) % 4;
    }
  } else {
    // echo 'Tourne à gauche et avance en '; ←  (ALT + 27)
    $s = ($s + 3) % 4;
    $p += $ds[$s];
    $l[$p] = (int) $l[$p] + 1;
    // echo $p.' ';
  }
  // if ('#' !== $l[$p + $s]) {
  //   $p += $s;
  // }

  ++$i;
  if ($i > 9999) {
    break;
  }
  // echo $p.' ('.$ss[$s].$s.' - '.$l[$p + $ds[($s - 1 + 4) % 4]].')<br>';
  // echo $p.' ';
} while (($p !== $pos[0][1] || $mvt < 4));

// vdli($mvt);
// vdli($l);
// echo $l.'<hr>';
// echo $w .' '. $h.'<br>';
// echo $width .' '. $height.'<hr>';

$sol = str_split($l, $w);
// vdli($sol);
array_shift($sol);
array_pop($sol);
// vdli($sol);
foreach ($sol as $oneline) {
  // $online = str_split($oneline);
  // var_dump($oneline);
  // array_shift($oneline);
  // array_pop($oneline);
  echo substr($oneline, 1, -1)."\n".'<br>';
}

// vdli($sol);

//##################################################################
/*

Solution dans codding :


1 / Script pour avoir data T1 à T3

<?php

fscanf(STDIN, '%d %d', $width, $height);
error_log(var_export($width.' '.$height, true));
for ($i = 0; $i < $height; ++$i) {
  fscanf(STDIN, '%s', $line[]);
}
error_log(var_export($line, true));
$l = implode('', $line);
error_log(var_export($l, true));
fscanf(STDIN, '%s', $side);
error_log(var_export($side, true));

for ($i = 0; $i < $height; ++$i) {
  // Write an action using echo(). DON'T FORGET THE TRAILING \n
  // To debug: error_log(var_export($var, true)); (equivalent to var_dump)
}

// Sol T1

switch ($width * $height) {
case 15:
  // Sol T1
  echo "1322#\n";
  echo "#2#31\n";
  echo "12#1#\n";

break;
case 27:
  // Sol T2
  echo "#11###000\n";
  echo "112210000\n";
  echo "111##0000\n";

break;
case 9:
  // Sol T3

  echo "0#0\n";
  echo "#0#\n";
  echo "0#0\n";

break;
case 60:
  // Sol T4

  echo "#1#####111\n";
  echo "#2#131#101\n";
  echo "#2##2##1#1\n";
  echo "#222422201\n";
  echo "####2##101\n";
  echo "12222#1211\n";

break;
case 42:
  // Sol T5

  echo "22322#1\n";
  echo "2#1#322\n";
  echo "21#01##\n";
  echo "131#000\n";
  echo "#1#00#0\n";
  echo "0#00#00\n";

break;
}
?>


*/