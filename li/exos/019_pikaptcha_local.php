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
$width  = 5;
$height = 3;
$LINE   = ['>000#', '#0#00', '00#0#'];

// Reconstitution Test 3
// 3 3
// 0#0
// #>#
// 0#0
// L
$width  = 3;
$height = 3;
$LINE   = ['0#0', '#>#', '0#0'];

$w   = $width + 2;
$h   = $height + 2;
$arr = array_fill(0, $width, '#');
array_unshift($LINE, implode('', $arr));
array_push($LINE, implode('', $arr));
$l = '';
foreach ($LINE as $ligne) {
  $l .= '#'.$ligne.'#';
}
echo $l;

$side = 'L';

$ss = ['^', '>', 'v', '<'];
$ds = [-$w, 1, $w, -1];
vdli($ss);
vdli($ds);

preg_match('/[^0+|#+]/', $l, $pos, PREG_OFFSET_CAPTURE);
// exit;
$p = $pos[0][1];
// Calcul du sens
$s = array_search($pos[0][0], $ss, true);

// case à gauche
for ($i = 0; $i < 4; ++$i) {
  echo $i.' '.$ds[($i + 5) % 4].'<br>';
}

echo '<hr>';
echo 'Pos dé part ( '.$pos[0][0].' ) est '.$pos[0][1].'<br>';
$i = 0;
while ($i <= 30) {
  echo $p.' ('.$ss[$s].$s.' - '.$l[$p + $ds[($s - 1 + 4) % 4]].')<br>';

  if ('#' === $l[$p + $ds[($s - 1 + 4) % 4]]) {
    if ('#' !== $l[$p + $ds[$s]]) {
      echo 'avance en ';
      $p += $ds[$s];
    } else {
      echo 'tourne à droite dans ';
      $s = ($s + 5) % 4;
    }
  }else {
    echo 'tourne à gauche et avance en ';
    $s = ($s +3) % 4;
    $p+=$ds[$s];
  }
  // if ('#' !== $l[$p + $s]) {
  //   $p += $s;
  // }

  ++$i;
}

// vdli($s);
// vdli($p);

//##################################################################
/*

Solution dans codding :

<?php



*/
