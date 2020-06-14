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

if ($side=='R'){
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

  if ('#' === $l[$p + $ds[($s - 1 + 4) % 4]]) {
    if ('#' !== $l[$p + $ds[$s]]) {
      // echo 'Avance en ';
      $p += $ds[$s];
      $l[$p] = (int) $l[$p] + 1;
    } else {
      // echo 'Tourne à droite dans ';
      $s = ($s + 5) % 4;
    }
  } else {
    // echo 'Tourne à gauche et avance en ';
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
  echo substr($oneline, 1, -1)."\n";
}

